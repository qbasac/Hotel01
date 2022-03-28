<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::latest()->paginate(10);
        return view('backend.subscription.index', compact('subscriptions'));
    }

    public function store(Request $request)
    {
        $subscription = new Subscription();
        $subscription->email = $request->email;
        $subscription->save();
        return back()->with('created', 'vale');
    }

    public function destroy($id)
    {
      $subscription = Subscription::find($id);
      $subscription->delete();
      return redirect()->route('admin.subscriptions.index')->with('deleted', 'Eliminado');
    }
}
