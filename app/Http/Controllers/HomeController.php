<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ForAdminindex()
    {
         $users = User::all();
         return view('AdminPanel',compact('users'));
    }
    public function edit(Request $request,$id)
    {

        $user = User::find($id);
        return view('UserToEdit',compact('user'));
        return "hello";
        return view('UserToEdit');

    }

    public function update(Request $request,$id)
    {
        $user =  \App\User::find($id);
        $user->name = $request-> name;
        $user->email = $request-> email;
        $user->created_at = $request-> created_at ;
        $user->updated_at = $request-> updated_at;
        $user->update();
        session()->flash('status', 'Successfully changed!');
        return back();
    }

    public function destroy($id)
    {
        $user =  \App\User::destroy($id);
        session()->flash('status', 'Successfully deleted!');
        return back();

    }
}
