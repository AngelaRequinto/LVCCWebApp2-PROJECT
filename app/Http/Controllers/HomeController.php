<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\makes;
use App\make;



class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mades = made::all();

        return view('home');
    }
    public function createpage()
    {
        return view('create');
    }
   public function add(Request $request)
    {   
         $title=$request->input('title');
         $subjCategory=$request->input('subjCategory');
         $content=$request->input('content');
        
        $user = new makes;

        $user->title = $request->title;
        $user->subjCategory = $request->subjCategory;
        $user->content=$request->content;
        
        $user->save();
        $user = makes::orderBy('id')->get();

        return view('home',['user'=>$user])->with([
            'flash_message'=>'Your Diary has been created',
            'flash_message_important'=> true
            ]);
    }

}
