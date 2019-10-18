<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Comment;
use App\Status;
use App\Priority;
use App\User;
use Auth;

class CommentController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role_permission');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'content' => 'required',
        ]);

        $u          = Auth::user();
        $comment    = new Comment();
        $ticket     = Ticket::find($request->ticket_id);

        $comment->user()->associate($u);
        $comment->ticket()->associate($ticket);

        $comment->content = $request->content;
        $comment->save();


        $statuses   = Status::all();
        $priorities = Priority::all();
        $technicals = User::join('role', 'role.id', '=', 'users.role_id')
                        ->where('role.name', '=', 'technical')
                        ->get();
                        
        return view('tickets.show', ['ticket' => $ticket, 'statuses' => $statuses, 'priorities' => $priorities, 'technicals' => $technicals]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
