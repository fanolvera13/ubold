<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

class dashboardController extends Controller
{
    //
    public function index(){
        
        if(Auth::user()->hasRole('cliente')){
            return view('dash.dashcliente');
        }elseif(Auth::user()->hasRole('user')){
            return view('dash.dashuser');
        }elseif(Auth::user()->hasRole('administrator')){
            //return view('dash.dashadmin');
            $menus = Menu::getMenu();
            return view('dash.dashadmin', compact('menus'));
        
        }else{
            return view('dashboard');
        }
    }
    public function nestable(){
        return view('dash.menu.nestable');
    }
}

