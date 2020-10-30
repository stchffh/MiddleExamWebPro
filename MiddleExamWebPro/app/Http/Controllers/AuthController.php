<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\User;
 
 
class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
        }
        return view('login');
    }
 
    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
 
        $messages = [
            'email.required'        => 'Email is required',
            'email.email'           => 'Email unvalid',
            'password.required'     => 'Password is required',
            'password.string'       => 'Password unvalid'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
 
        Auth::attempt($data);
 
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
 
        } else { // false
 
            //Login Fail
            Session::flash('error', 'Email or password is wrong');
            return redirect()->route('login');
        }
 
    }
 
    public function showFormRegister()
    {
        return view('register');
    }
 
    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'address'               => 'required|string',
            'phonenumber'           => 'required|string',
            'gender'                => 'required|string',
            'password'              => 'required|confirmed'
        ];
 
        $messages = [
            'name.required'         => 'Name must be filled',
            'name.min'              => 'Name must be 3 or more characters',
            'name.max'              => 'Name must be less than 35 characters',
            'email.required'        => 'Email must be filled',
            'email.email'           => 'Email unvalid',
            'email.unique'          => 'Email sudah terdaftar',
            'address.required'      => 'Address must be filled',
            'phonenumber.required'  => 'Phone number must be filled',
            'gender.required'       => 'Gender must be filled',
            'password.required'     => 'Password must be filled',
            'password.confirmed'    => 'Password unmatched'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->address = strtolower($request->address);
        $user->phonenumber = strtolower($request->phonenumber);
        $user->gender = strtolower($request->gender);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();
 
        if($simpan){
            Session::flash('success', 'Register success! Please log in..');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register failed! Please retry another moment..']);
            return redirect()->route('register');
        }
    }
 
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
 
 
}