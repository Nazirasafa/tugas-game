<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tips;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class tutorialController extends Controller
{
     // Display a listing of the resource.
     public function index()
     {
         $tutorials = Tutorial::all();
         $newws = News::all();
         $tiips = Tips::all();

         return view('welcome', compact('tutorials','newws','tiips' ));
     }
 
     // Show the form for creating a new resource.
     public function create()
     {
         return view('tutorial.create');
     }
 
     // Store a newly created resource in storage.
     public function store(Request $request)
     {
         $request->validate([
             'title' => 'required',
             'thumbnail' => 'required',
             'link' => 'required',
         ]);
 
         tutorial::create($request->all());
 
         return redirect()->route('tutorial.index')
                         ->with('success', 'Post created successfully.');
     }
 
     // Display the specified resource.
     public function show(Tutorial $post)
     {
         return view('tutorial.show', compact('post'));
     }
 
     // Show the form for editing the specified resource.
     public function edit(Tutorial $post)
     {
         return view('tutorial.edit', compact('post'));
     }
 
     // Update the specified resource in storage.
     public function update(Request $request, Tutorial $post)
     {
         $request->validate([
             'title' => 'required',
             'thumbnail' => 'required',
             'link' => 'required',
             
         ]);
 
         $post->update($request->all());
 
         return redirect()->route('tutorial.index')
                         ->with('success', 'Post updated successfully.');
     }
 
     // Remove the specified resource from storage.
     public function destroy(Tutorial $post)
     {
         $post->delete();
 
         return redirect()->route('tutorial.index')
                         ->with('success', 'Post deleted successfully.');


     }
}
