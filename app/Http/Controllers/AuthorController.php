<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Javascript -> Arif, Binu
     * Java -> Arif, Ariba
     * C -> Ariba, Abdullah
     * C++ -> Arif, Binu
     * Go -> Arif, Binu, Ariba, Abdullah
    */
    public function index() {
        // $data = Author::with('book')->get();

        // foreach($data as $item) {
        //     echo $item->name.'<br><br>';
        //     foreach($item->book as $book) {
        //         echo $book->title.'<br><br>';
        //         // dd($book);
        //     }
        //     echo '<br><br>';
        // }

        // dd($data->toArray());


        $res = Book::with('author')->get();

        foreach($res as $book) {
            echo $book->title.'<br>';
            foreach($book->author as $author) {
                echo $author->name.'<br>';
                // dd($author);
            }
            echo '<br><br>';
        }

        // dd($res->toArray());
    }
}
