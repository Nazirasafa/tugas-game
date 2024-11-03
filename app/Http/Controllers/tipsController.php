<?php

namespace App\Http\Controllers;

use App\Models\tips;
use Illuminate\Http\Request;

class tipsController extends Controller
{
     // Display a listing of the resource.
     public function index()
     {
         $tips = tips::all();
         return view('tips.index', compact('tips'));
     }
 
     // Show the form for creating a new resource.
     public function create()
     {
         return view('tips.create');
     }
 
     // Store a newly created resource in storage.
     public function store(Request $request)
     {
         $request->validate([
             'title' => 'required',
             'thumbnail' => 'required',
             'link' => 'required',
         ]);
 
         tips::create($request->all());
 
         return redirect()->route('tips.index')
                         ->with('success', 'Post created successfully.');
     }
 
     // Display the specified resource.
     public function show(tips $post)
     {
         return view('tips.show', compact('post'));
     }
 
     // Show the form for editing the specified resource.
     public function edit(tips $post)
     {
         return view('tips.edit', compact('post'));
     }
 
     // Update the specified resource in storage.
     public function update(Request $request, tips $post)
     {
         $request->validate([
             'title' => 'required',
             'text' => 'required',
             
         ]);
 
         $post->update($request->all());
 
         return redirect()->route('tips.index')
                         ->with('success', 'Post updated successfully.');
     }
 
     // Remove the specified resource from storage.
     public function destroy(tips $post)
     {
         $post->delete();
 
         return redirect()->route('tips.index')
                         ->with('success', 'Post deleted successfully.');
     }
}
