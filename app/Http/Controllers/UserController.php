<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterPost;

class UserController extends Controller
{
    /**
     * ユーザー登録画面を表示する
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('user.register');
    }
    /**
     * ユーザー登録
     * 
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return view('index');
    }
    
    public function store(UserRegisterPost $request)
{
    // validate済
    // データ取得
    $datum = $request->validated();
    $datum['password'] = Hash::make($datum['password']);
    
    // 認証
    if (Auth::attempt($datum) === false) {
        return back()
               ->withInput() // 入力値の保持
               ->withErrors([
                   'name' => 'The name field is required.',
                   'email' => 'The email field is required.',
                   'password' => 'The password field is required.',
               ]) // エラーメッセージの出力
               ;
    }
        //
        $request->session()->regenerate();
        return redirect()->intended('/task/list');

    }
    
}