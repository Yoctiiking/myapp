<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $title = 'UserView';

        $users = [
            [
                'Lastname' => 'Bastian',
                'Firstname' => 'Rodriguez',
                'Email' => 'rodriguez@gmail.com'
            ],
            [
                'Lastname' => 'Jose',
                'Firstname' => 'Perez',
                'Email' => 'perez@gmail.com'
            ],
            [
                'Lastname' => 'Maria',
                'Firstname' => 'Gomez',
                'Email' => 'gomez@gmail.com'
            ],
            [
                'Lastname' => 'Jose',
                'Firstname' => 'Perez',
                'Email' => 'perez@gmail.com'
            ],
            [
                'Lastname' => 'Maria',
                'Firstname' => 'Gomez',
                'Email' => 'gomez@gmail.com'
            ],
            [
                'Lastname' => 'Jose',
                'Firstname' => 'Perez',
                'Email' => 'perez@gmail.com'
            ]
        ];

        return view('user', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
