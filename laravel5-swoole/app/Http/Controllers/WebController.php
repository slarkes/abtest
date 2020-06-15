<?php


namespace App\Http\Controllers;


class WebController extends Controller
{
    public function index()
    {
        return response("hello world swoole");
    }
}