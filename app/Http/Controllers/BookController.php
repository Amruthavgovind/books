<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // $title = $request->title ?? '';
        // $author = $request->author ?? '';
        // $books = Book::when($title, function ($query) use ($title) {
        //     return $query->where("title", "like", "%$title%");
        // })
        // ->when($author, function ($query) use ($author) {
        //     return $query->where("author", "like", "%$author%");
        // });

        
        $books = Book::all();

        return view("index", compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'published_year' => 'required|max:255',
            'genre' => 'required|max:100',
        ]);

        // dd($request->all()); exit;

        Book::create($validation);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = Book::where('id', $id)->first();

        return view("show", compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = Book::where('id', $id)->first();

        return view("edit", compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function modify(Request $request, string $id)
    {
        $validation = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'published_year' => 'required|max:255',
            'genre' => 'required|max:100',
        ]);


        // dd($validation); exit;
        $updatestat = Book::whereId($id)->update($validation);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Book::where('id', $id)->delete();
        return redirect()->route('index');
    }
}
