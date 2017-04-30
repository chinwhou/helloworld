<?php

namespace Max\HelloWorld;

use App\Http\Controllers\Controller;
use App\Http\Request;

class HelloWorldController extends Controller
{
    /*
     * Display a listing of the resource
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $message = 'Hello World';
        return view('helloworld::welcome2',compact('message'));
//        return view('hellowrold::welcome');
    }
}
