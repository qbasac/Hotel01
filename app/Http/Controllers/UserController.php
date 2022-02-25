<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\About;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
  public function index(Request $request)
  {
    $about = About::first();
    $users = User::where(function ($query) use ($request) {
      if ($request->searchBy && $request->search) {
        $query->where($request->searchBy, 'like', "%$request->search%");
      }
    })->paginate(7);
    return view('backend.users.index', compact('users', 'about'));
  }

  public function create()
  {
    return view('backend.users.create');
  }

  public function store(StoreUserRequest $request)
  {
    $users = new User();
    $users->name = $request->name;
    $users->email = $request->email;
    $users->nick_name = $request->nick_name;
    if($request->file('avatar')){
      $namefile = Carbon::now()->format("dmYHis").".".$request->file('avatar')->getClientOriginalExtension();
      $request->file('avatar')->storeAs('public/users', $namefile);
      $users->avatar = $namefile;
    }
    $users->password = Hash::make("fulltecnologia");
    $users->save();

    return redirect()->route('usuario.index')->with('created', 'Registro guardado exitósamente.');
  }

  public function edit($id)
  {
    $user = User::whereId($id)->first();
    return view('backend.users.edit', compact('user'));
  }

  public function update(StoreUserRequest $request, $id)
  {
    $users = User::find($id);
    $users->name = $request->name;
    $users->email = $request->email;
    $users->nick_name = $request->nick_name;
    if($request->file('avatar')){
      $namefile = Carbon::now()->format("dmYHis").".".$request->file('avatar')->getClientOriginalExtension();
      $request->file('avatar')->storeAs('public/avatar', $namefile);
      $users->avatar = $namefile;
    }
    $users->save();

    return redirect()->route('usuario.index')->with('updated', 'Registro actualizado exitósamente.');
  }

  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();

    return redirect()->route('usuario.index')->with('deleted', 'Registro eliminado exitósamente.');
  }

  public function updateIsActive(Request $request, $id)
  {
    $newState = $request->state ? 0 : 1;
    User::whereId($id)->update([
      'is_active' => $newState
    ]);
    return redirect()->route('usuario.index');
  }


  public function profile (){
    return view('backend.users.profile');
  }

  public function profileUpdate(UpdateProfileRequest $request) {
    // dd($request->all());
    if(!Hash::check($request->current_password, auth()->user()->password)) {
      return back()->withErrors(['currentPasswordError' => 'La contraseña actual no es correcta.'])->withInput();
    }
    if($request->new_password != $request->new_confirm_password) {
      return back()->withErrors(['Errors passwords' => 'La nueva contraseña y confirmar contraseña no son iguales'])->withInput();
    }

    $user = User::find(auth()->user()->id);
    $user->nick_name = $request->nick_name;
    $user->email = $request->email;
    // if($request->file('avatar')){
    //   $namefile = Carbon::now()->format("dmYHis").".".$request->file('avatar')->getClientOriginalExtension();
    //   $request->file('avatar')->storeAs('public/users', $namefile);
    //   $user->avatar = $namefile;
    // }

    if($request->file('avatar')){
      $namefile = Carbon::now()->format("dmYHis").".".$request->file('avatar')->getClientOriginalExtension();
      $request->file('avatar')->storeAs('public/avatar', $namefile);
      $user->avatar = $namefile;
    }



    if($request->is_change_password) {
      $user->password = Hash::make($request->new_password);
    }
    $user->save();

    // $user->update([
    //   'nick_name' => $request->nick_name,
    //   'email' => $request->email,
    // ]);
    return back();
  }

  public function ShowSectionStaff(Request $request, $id)
  {

    $newState = $request->state ? 0 : 1;
    About::whereId($id)->update([
      'show_section_staff' => $newState
    ]);
    return back();
  }
}
