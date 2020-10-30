<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ProfileController extends Controller
{
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request)
    {
        return view('edit', [
            'user' => $request->user()
        ]);
    }
    /**
     * Update user's profile
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        $request->user()->update(
            $simpan = $request->all()
        );
        if($simpan){
            Session::flash('success', 'Register success! Please log in..');
            return redirect()->route('profile');
        } else {
            Session::flash('errors', ['' => 'Register failed! Please retry another moment..']);
            return redirect()->route('profile');
        }
        //return redirect()->route('profile');
    }
}
