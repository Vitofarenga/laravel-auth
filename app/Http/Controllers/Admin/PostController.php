<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    @return \Illuminate\Http\Response

    public function index(){
        return view('admin.posts.index');
    }
}
