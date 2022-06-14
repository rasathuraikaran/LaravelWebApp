<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestAPIControlleer extends Controller
{
    public function firstAPI()
    {

        //return "Response from controller";
        return [
            ["name"=>'karan',"email"=>"Karan26@gmail.com"],
            ["name"=>'str',"email"=>"str@gmail.com"]

        ] ;
    }
}
