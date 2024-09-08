<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signIn(){
        return view('signIn');
    }

    public function signUp(){
        return view('signUp');
    }

    public function signUpForm(Request $request){
        $request->validate(
            [
                "name" => "required",
                "surname" => "required",
                "email" => "required|unique:users|email",
                "password" => "required",
            ],
            [
                "name.required" => "Поле обязательно для заполнения",
                "surname.required" => "Поле обязательно для заполнения",
                "email.required" => "Поле обязательно для заполнения",
                "email.email" => "Введите правильный адрес",
                "email.unique" => "Данный адрес занят",
                "password.required" => "Поле обязательно для заполнения",
            ]);
        $signUpForm = $request->all();
             User::create([
            'name'=>$signUpForm['name'],
            'surname'=>$signUpForm['surname'],
            'email'=>$signUpForm['email'],
            'password'=>Hash::make($signUpForm['password']),
            'id_role'=>2,
        ]);
        return redirect('/signIn')->with('success','Регистрация прошла успешно!');
    }

    public function signInForm(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ], [
            "email.required" => "Поле обязательно для заполнения",
            "password.required" => "Поле обязательно для заполнения",
        ]);
        
        $auth = $request->only('email','password');
        if(Auth::attempt([
            'email'=>$auth['email'],
            'password'=>$auth['password'],
        ])){
            if(Auth::user()->id_role == 2){
                return redirect('/')->with('success','Вы успешно авторизировались!');
            }else{
                return redirect('/admin/admin')->with('success','Вы успешно зашли в админ панель');
            }
        }else{
            return redirect('/signIn')->with('error','Неверная почта или пароль');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect("/")->with('logout','Вы вышли из аккаунта');
    }
}
