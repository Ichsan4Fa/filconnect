<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Student;
use App\Models\Comment;
use App\Models\Upvote;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createNewPost(Request $request){
        // image
        if($request->hasFile('foto')){
        $validatedData = $request->all();
        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('images', $fileName, 'public');
        $validatedData['foto'] = 'storage/'.$path;
        }
        // video
        if($request->hasFile('video')){
        $validatedData = $request->all();
        $fileName = time().$request->file('video')->getClientOriginalName();
        $path = $request->file('video')->storeAs('video', $fileName, 'public');
        $validatedData['video'] = 'storage/'.$path;
        }
        $validatedData = $request->validate([
            'konten' => 'required|max:500',
            'foto' => 'nullable|mimes:jpg,png',
            'video' => 'nullable|mimes:mp4,ogg,webm',
        ]);
        
        // student's id
        $validatedData['student_id'] = auth()->user()->id;
        Post::create($validatedData);

        return redirect('/halamanUtama')->with('success', 'Unggahan baru telah dibuat');
    }

    public function toHalamanDetailUnggahan(Post $post){
        return view ('halamanDetailUnggahan',[
            "post" => $post,
        ]);
    }

    public function getPosts(){
        return view('halamanUtama',[
            "posts" => Post::all()
        ]);
    }

    public function tampilkanKomentar(Comment $comment)
    {   
        //
        return view('/halamanDetailUnggahan',[
            "comments" => Comment::where('post_id',)
        ]);
    }

    public function tambahKomentar(Request $request)
    {
        //
        $validatedData = $request->validate([
            'komentar' => 'required|max:500',
        ]);
        
        // student's id
        $validatedData['student_id'] = auth()->user()->id;
        $validatedData['post_id'] = auth()->user()->id;
        Post::create($validatedData);

        return redirect('/halamanDetailUnggahan')->with('success', 'Unggahan baru telah dibuat');
    }
}
