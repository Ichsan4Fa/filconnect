<?php

namespace App\Http\Controllers;

use App\Models\Upvote;
use App\Http\Requests\StoreUpvoteRequest;
use App\Http\Requests\UpdateUpvoteRequest;

class UpvoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilkanUpvote()
    {
        //
        return view('/halamanDetailUnggahan/{post}',[
            "upvote" => Upvote::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addUpvote(Request $request)
    {
        //
        $validatedData = $request->validate([
            'post_id' => 'required',
        ]);
        $validatedData['student_id'] = auth()->user()->id;
        $validatedData['jumlahUpvote'] = 1;
        Upvote::create($validatedData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpvoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function removeUpvote(StoreUpvoteRequest $request)
    {
        //
        $upvote = Upvote::where('post_id',$request->post_id)->where('student_id',auth()->user()->id)->first();
        if($upvote){
            $upvote->delete();
        }
    }

}
