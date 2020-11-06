<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use \Illuminate\Http\Request;

class BooksController extends Controller{
    public function index(){
        return Book::all();
    }

    public function cariId($id){
        $book = Book::where('id', $id)->first();
            if ($book){
                return response()->json([
                    'message' => 'ID Buku',
                    'data' => $book
                ], 201);
            } else {
                return response()->json([
                    'message' => 'Book Not Found',
                ], 404);
            }
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required'
        ]);
        $book = Book::create(
            $request->only(['title', 'description', 'author'])
        );

        return response()->json([
            'created' => true,
            'data' => $book
        ], 201);
    }

    public function update(Request $request, $id){
        try{
            $book = Book::findOrFail($id);
        } catch (ModelNotFoundException $e){
            return response()->json([
                'messsage' => 'Book Not Found'
            ], 404);
        }

        $book->fill(
            $request->only(['title', 'description', 'author'])
        );

        $book->save();

        return response()->json([
            'updated' => true,
            'data' => $book
        ], 200);
    }

    public function destroy($id){
        try{
            $book = Book::findOrFail($id);
        } catch (ModelNotFoundException $e){
            return response()->json([
                'error' => [
                    'message' => 'Book Not Found'
                ]
            ], 404);
        }

        $book->delete();

        return response()->json([
            'deleted' => true
        ], 200);
    }
}

