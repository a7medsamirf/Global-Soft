<?php

namespace App\Http\Controllers;
use App\Models\client;
use App\Models\slider;
use App\Models\about;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       /* $this->middleware('auth'); // لا يمكن اظهار الموقع الا بعد تسجيل الدخول */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::get();
        $sliders = Slider::first();   // استدعاء عنصر واحد فقط
        $abouts = about::first();   // استدعاء عنصر واحد فقط
       /* $sliders = Slider::orderBy('id', 'desc')->first(); */   // استدعاء اخر عنصر
       /* $sliders = Slider::where('name' , 'ahmed')->first(); */  //  استدعاء اسم احمد اول واحد
        $clients = client::orderBy('id', 'desc')->limit(5)->get();
        return view('home')->with('data' ,
            [ 'posts'=>$posts ,
              'clients'=>$clients ,
              'slider'=>$sliders ,
              'about'=>$abouts

            ]);



    }
}
