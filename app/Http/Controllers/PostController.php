<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Posted
{
    static $posts =
        [
            [
                'id' => 1,
                'title' => 'js',
                'slug' => 'js',
                'description' => 'js description',
                'created_by' => 'mohamed',



            ],
            [
                'id' => 2,
                'title' => 'cpp',
                'slug' => 'cpp',
                'description' => 'cpp description',
                'created_by' => 'zaater',



            ],
            [
                'id' => 3,
                'title' => 'dart',
                'slug' => 'dart',
                'description' => 'dart description',
                'created_by' => 'mohsen',



            ],
            [
                'id' => 4,
                'title' => 'go',
                'slug' => 'go',
                'description' => 'go description',
                'created_by' => 'google',



            ]
        ];
}
class PostController extends Controller
{
    public function index(){
        $posts=Posted::$posts;

                return view('posts.index',['posts' => $posts]);

    }
    public function show ($prop){
        return view('posts.show',['shows'=>(Posted::$posts)[--$prop]]);
    }
    public function create()

    {
        return view('posts.create');
    }
    public function store(Request $request)

    {
        $arrrequest=$request->all();
        $title = $arrrequest['title'];
        $description = $arrrequest['desc'];
        $postCreator = $arrrequest['creator'];

        return view('posts.store');
    }
    public function destroy($prop){

        return view('posts.destroy',['destroys'=>(Posted::$posts)[--$prop]]);
    }

}
