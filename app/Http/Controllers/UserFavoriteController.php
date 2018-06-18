<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
   public function store(Request $request, $micropostsid)
    {
        \Auth::user()->favorite($micropostsid);
        return redirect()->back();
    }

    public function destroy($micropostsid)
    {
        \Auth::user()->unfavorite($micropostsid);
        return redirect()->back();
    }

 
  
}