<?php
namespace wdd\slug\Http\Controllers;

use App\Http\Controllers\Controller;

class SlugController extends Controller
{
    public function index()
    {
        $str = "hello form controller";
        return view('wdd/slug::slug', compact('str'));
    }
}