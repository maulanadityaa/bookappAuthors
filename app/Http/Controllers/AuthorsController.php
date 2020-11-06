<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorsController extends Controller{
    public function index(){
        return Authors::all();
    }

    public function cariId($id){
        $author = Authors::where('id', $id)->first();
            if ($author){
                return response()->json([
                    'message' => 'ID Author',
                    'data' => $author
                ], 201);
            } else {
                return response()->json([
                    'message' => 'Author Not Found',
                ], 404);
            }
    }

    public function tambahAuth(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'biography' => 'required'
        ]);
        $author = Authors::create(
            $request->only(['name', 'gender', 'biography'])
        );

        return response()->json([
            'created' => true,
            'data' => $author
        ], 201);
    }

    public function updateAuth(Request $request, $id){
        try{
            $author = Authors::findOrFail($id);
        } catch (ModelNotFoundException $e){
            return response()->json([
                'messsage' => 'Author Not Found'
            ], 404);
        }

        $author->fill(
            $request->only(['name', 'gender', 'biography'])
        );

        $author->save();

        return response()->json([
            'updated' => true,
            'data' => $author
        ], 200);
    }

    public function destroyAuth($id){
        try{
            $author = Authors::findOrFail($id);
        } catch (ModelNotFoundException $e){
            return response()->json([
                'error' => [
                    'message' => 'Author Not Found'
                ]
            ], 404);
        }

        $author->delete();

        return response()->json([
            'deleted' => true
        ], 200);
    }
}