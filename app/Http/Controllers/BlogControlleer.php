<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogControlleer extends Controller
{
   public function getBlog(){

    $blog=Blog::all();
    return $blog;
   }
}
