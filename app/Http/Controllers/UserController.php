<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Illuminate\Support\Facades\Input;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getReg()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data =  Input::all();

        $reg =  User::create([
            //'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        if($reg){
            return 'Регистрация прошла успешна'. "<a href ='/'> назад</a>";
        }
    }

    public $rules = [
        'email' => 'required|email|exists:users',
        'password' => 'required',
    ];
    public function login() {
        
        $data = Input::all();
        $validation = Validator::make($data, $this->rules);
        //валидация прошла успешна
        if ($validation->passes()) {
            //запомнить меня
            $remember = Input::get('remember');
            $auth = Auth::attempt([
                        'email' => Input::get('email'),
                        'password' => Input::get('password')
                            ], $remember);
            //dd($auth);
            if ($auth) {
                return redirect()->back();
            }
            //else {
//                return redirect()->back()->withErrors('неправильно введен логин или пароль');
//            }
        }
        return 'ваш Email' .Input::get('email')."<input type='button'id='close' value='скрыть'/>";
    }
}
