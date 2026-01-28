<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categorie;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('categories')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp,jfif|max:2048',
            'categorie_id' => 'required|exists:categories,id',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('posts', $name, 'public');
            $data['image'] = $path;
        }

        Post::create($validated);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Categorie::all();
        return view('posts.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'nullable',
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);
        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = time().'_'.$file->getClientOriginalName();
        $path = $file->storeAs('posts', $name, 'public');
        $validated['image'] = $path;
    }
        $post->update($validated);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
