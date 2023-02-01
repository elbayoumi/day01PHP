<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = [
            [
                'id'=> 1,
                'title' => 'js',
                'slug' => 'js',
                'description' => 'js description',
                'created_by' => 'mohamed',



            ],
            [
                'id'=> 2,
                'title' => 'cpp',
                'slug' => 'cpp',
                'description' => 'cpp description',
                'created_by' => 'zaater',



            ],[
                'id'=> 3,
                'title' => 'dart',
                'slug' => 'dart',
                'description' => 'dart description',
                'created_by' => 'mohsen',



            ],[
                'id'=> 4,
                'title' => 'go',
                'slug' => 'go',
                'description' => 'go description',
                'created_by' => 'google',



            ]
                ];
                return view('posts.index',['posts' => $posts]);

    }
    public function show ($prop){
        $shows =       [
            'id'=> 1,
            'title' => 'medo',
            'slug' => 'jsssd',
            'description' => 'jdfvfgrvfd',
            'created_by' => 'dsvcwqdwsc'

        ];

        return view('posts.show',['shows'=>$shows]);
    }
}
