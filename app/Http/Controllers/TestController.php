<?php

namespace App\Http\Controllers;
use \DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class TestController extends Controller
{
    public function index ()
    {
        $users = DB::table('migrations')
            ->get();
        dump($users);
    }
}
