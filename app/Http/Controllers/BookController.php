<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function show_all_book()
    {
        return Book::paginate(6);
    }
    public function create_new_book(Request $request){
        $author = Author::all()->where('id','=',$request->author_id)->first();
        $book = new Book();
        $book ->title = $request->title;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->book_url = $request -> book_url;
        $author ->book()->save($book);
        return $book;
    }

    public function get_random_5_book(){
        return DB::select('SELECT * FROM book ORDER BY RANDOM() LIMIT 5');
    }
}
