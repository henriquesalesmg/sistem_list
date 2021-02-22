<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use Authenticatable;

    protected $redirectTo = '/painel';

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
    public function index(){
        echo "Tela de login";
    }
}