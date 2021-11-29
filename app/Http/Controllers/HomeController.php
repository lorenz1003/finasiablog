<?php

namespace App\Http\Controllers;
use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Views;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function check(Request $request){
        if (Auth::check()) {

        return view('dashboard.index')
        ->with('posts', Post::orderBy('id', 'ASC')->get());

      }
      else
      {
          return redirect('/login');
      }
  }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }




}

