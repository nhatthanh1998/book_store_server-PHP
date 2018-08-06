<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Illuminate\Routing\Controller;

class AuthorController extends Controller
{
    public function show_all_author()
    {
        return Author::all();
    }

}
