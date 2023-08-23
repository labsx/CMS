<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view ('login');
    }

    public function login(Request $request){
        $validated = $request->validate([
            "email" =>['required','email'] ,
            "password" => ['required'],
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();
            return redirect('display') ->with('message', 'Welcome Back !');
        }else{
            return view ('login')->with('message', 'username and password not match!');
        }
    }


    public function dashboard(){
        return view ('dashboard');
    }

    public function display(){
        return view ('staff.registration');
    }

    public function store(Request $request){
        // dd($request);
        $validated = $request->validate([
            "name" => ['required', 'min:5'],
            "email" => ['required','email', Rule::unique('users', 'email')] ,
            "password" => ['required', 'min:4', 'max: 50'], 
        ]);
       
        $valdiate['password']=bcrypt($validated['password']);
        auth()->login(User::create($validated));  
        return back()->with('message', 'Added Successfully');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect ('/')->with('message', 'Log out successful');
    }

    public function list(){
        $data = array("users" => DB::table('users')->orderBy('created_at', 'desc')->Paginate(10));
        return view ('staff.list', $data);
    }

    public function data($id){
        $data = User::findOrFail($id);
        return view('staff.edit',['user' => $data]);
    }

    public function edit(Request $request, User $user){
    
        $validated = $request->validate([
            "name" => ['required', 'min:5', 'max:255'],
            "email" => ['required','email', Rule::unique('users', 'email')] ,
            "password" =>['required','min:4'] ,
            
        ]);

        $user->update($validated);
        return back()->with('message', 'Update Data successfully!');
    }

    public function destroy(User $user){
        $user->delete();
        return back()->with('message', 'Deleted Successfully');
    }
    
}
