<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Ticket;
use App\Http\Resources\Comment as CommentResource;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::paginate(10);

        return CommentResource::collection($comments);
    }

    public function find_by_ticket(Request $request, $ticket_id) {
        $comments = Comment::where("ticket_id", $ticket_id)->get();
        return CommentResource::collection($comments);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $ticket_id)
    {
        
        $comment = new Comment;
        $comment->content = $request->input("content");
        $comment->ticket_id = $ticket_id;
        $comment->user_id = Auth::user()->id;

        $comment->save();

        return new CommentResource($comment);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ticket_id, $id)
    {
        //
        $comment = Comment::find($id);
        if($comment)
            return new CommentResource($comment);
        else
            return response()->json(["error" => "Not Found"], 400);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ticket_id, $comment_id)
    {
        $comment = Comment::find($comment_id);
        $comment->content = $request->input('content');

        if($comment->save())
            return new CommentResource($comment);
        else
            return response()->json(['error' => 'something went wrong'], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ticket_id, $id)
    {
        $comment = Comment::findOrFail($id);
        if($comment->delete()){
            return new CommentResource($comment);
        }
    }
}
