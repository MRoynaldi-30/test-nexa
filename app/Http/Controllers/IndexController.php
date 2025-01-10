<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $blog = Blog::limit(3)->get();
        // dd($blog);exit;
        return view('home', compact('blog'));
    }
}
