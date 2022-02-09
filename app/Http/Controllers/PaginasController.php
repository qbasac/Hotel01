<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function paginasComingsoon()
    {
        return view('frontend.paginas-comingsoon');
    }
    public function paginas404()
    {
        return view('frontend.404');
    }
    public function paginasSignup()
    {
        return view('frontend.signup');
    }
    public function paginasStaff()
    {
        return view('frontend.staff');
    }
    public function paginasLogin()
    {
        return view('frontend.login');
    }

}
