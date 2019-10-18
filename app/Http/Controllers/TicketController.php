<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Status;
use App\Priority;
use App\User;
use Auth;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role_permission');
    }

    public function index() {
        $tickets = Ticket::paginate(10);
        return view('tickets.index', ['tickets' => $tickets]);
    }

    public function create() {
        $status     = Status::all();
        $priority   = Priority::all();
        $technicals = User::join('role', 'role.id', '=', 'users.role_id')
                        ->where('role.name', '=', 'technical')
                        ->get();

        return view('tickets.create', ['status' => $status, 'priority' => $priority, 'technicals' => $technicals]);
    }

    public function store(Request $request) {
        $validator = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $s = Status::find($request->status);
        $p = Priority::find($request->priority);

        $ticket = new Ticket();

        $ticket->status()->associate($s);
        $ticket->priority()->associate($p);

        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->request_by = Auth::user()->id;

        if($request->solve_by != NULL)
            $ticket->solve_by = $request->solve_by;
        else
            $ticket->solve_by = NULL;


        $ticket->save();
        
        return redirect()->route('tickets.index');
    }

    public function show($id) {
        $ticket     = Ticket::find($id);
        $statuses   = Status::all();
        $priorities = Priority::all();
        $technicals = User::join('role', 'role.id', '=', 'users.role_id')
                        ->where('role.name', '=', 'technical')
                        ->get();

        return view('tickets.show', ['ticket' => $ticket, 'statuses' => $statuses, 'priorities' => $priorities, 'technicals' => $technicals]);
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $s = Status::find($request->status);
        $p = Priority::find($request->priority);

        $ticket = Ticket::find($id);

        $ticket->status()->associate($s);
        $ticket->priority()->associate($p);

        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->request_by = Auth::user()->id;
        
        if($request->solve_by != NULL)
            $ticket->solve_by = $request->solve_by;
        else
            $ticket->solve_by = NULL;

        $ticket->save();
        
        return redirect()->route('tickets.index');   
    }

    public function destroy($id) {
        //
        $ticket = Ticket::find($id)->delete();

        return redirect()->route('tickets.index');
    }
}
