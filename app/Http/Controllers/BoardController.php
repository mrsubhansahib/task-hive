<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.board.boardform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function createboard(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'visibility' => 'required|in:public,private',
        ]);
        $board = new Board();
        $board->id = uniqid();
        $board->user_id = auth()->id();
        $board->title = $request->input('title');
        $board->description = $request->input('description');
        $board->visibility = $request->input('visibility');
        $board->save();

        return redirect('/board');
    }

    /**
     * Display the specified resource.
     */
    public function show(Board $board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Board $board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Board $board)
    {
        //
    }
}
