<?php

namespace App\Http\Controllers;

use App\Models\BookForm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about_us(){

               return view('about');
    }

    public function package(){

        return view("package");
    }
    public function book_form(){

        return view ('book');

    }

    public function post_book_form(Request $request){

           $book=new BookForm();
           $book->name=$request->name;
           $book->email=$request->email;
           $book->phone=$request->phone;
           $book->address=$request->address;
           $book->location=$request->location;
           $book->guests=$request->guests;
           $book->arrivals=$request->arrivals;
           $book->leaving=$request->leaving;
           $book->save();

                     return redirect()->route('book_form');
    }
}
