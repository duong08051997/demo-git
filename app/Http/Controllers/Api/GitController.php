<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GitController extends Controller
{
    public function index()
    {
        return view('github.users.list');
    }
    public function search(Request $request)
    {
        $keyword =$request->keyword;
        $res = Http::get(config('app.github_api_url').'search/users',[
            'q'=>$keyword
        ]);
        $students = \GuzzleHttp\json_decode( $res->body())->items;
//        dd($students);
        return view('github.users.list',compact('students'));
    }
    public function getUser($username)
    {
        $res = Http::get(config('app.github_api_url').'/search/'.$username);
        $users = json_decode( $res->body());
        dd($users);
        return view('github.users.detail');
    }
}
