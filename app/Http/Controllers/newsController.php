<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class newsController extends Controller
{
     // Display a listing of the resource.
     public function index()
     {
         $news = news::all();
         return view('news.index', compact('news'));
     }
 
     // Show the form for creating a new resource.
     public function create()
     {
         return view('news.create');
     }
 
     // Store a newly created resource in storage.
     public function store(Request $request)
     {
         $request->validate([
             'title' => 'required',
             'thumbnail' => 'required',
             'text' => 'required',
         ]);
 
         news::create($request->all());
 
         return redirect()->route('news.index')
                         ->with('success', 'Post created successfully.');
     }
 
     // Display the specified resource.
     public function show(news $post)
     {
         return view('news.show', compact('post'));
     }
 
     // Show the form for editing the specified resource.
     public function edit(news $post)
     {
         return view('news.edit', compact('post'));
     }
 
     // Update the specified resource in storage.
     public function update(Request $request, news $post)
     {
         $request->validate([
             'title' => 'required',
             'thumbnail' => 'required',
             'link' => 'required',
             
         ]);
 
         $post->update($request->all());
 
         return redirect()->route('news.index')
                         ->with('success', 'Post updated successfully.');
     }
 
     // Remove the specified resource from storage.
     public function destroy(news $post)
     {
         $post->delete();
 
         return redirect()->route('news.index')
                         ->with('success', 'Post deleted successfully.');
     }
}
