<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function store()
    {
        $author = Author::create(\request()->only([
            'name', 'dob'
        ]));
    }
}
