<?php

namespace easyHome\Http\Controllers;

use Illuminate\Http\Request;

class KitchenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //if(!\Gate::allows('isAdmin')){
        //    abort(403, "Desculpe, mas você não tem acesso a estas configurações.");
        //}else{
        return view('kitchen');
        //}

    }
}
