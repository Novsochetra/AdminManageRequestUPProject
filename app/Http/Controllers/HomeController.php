<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $amount_open_tickets          = 0;
        if(Auth::user()->role->name == "technical") {
            $amount_all_tickets         = count(Ticket::all());

            $amount_resolved_tickets    = count(Ticket::join('status', 'status.id', '=', 'tickets.status_id')
                                            ->where('status.name', '=', 'Resolved')
                                            ->where('tickets.solve_by', '=', Auth::user()->id)
                                            ->get());

            $amount_open_tickets        = count(Ticket::join('status', 'status.id', '=', 'tickets.status_id')
                                            ->where('status.name', '=', 'Open')
                                            ->get());

        } else if(Auth::user()->role->name == "user") {
            $amount_all_tickets         = count(Ticket::where('request_by', Auth::user()->id)->get());
            $amount_open_tickets        = count(Ticket::join('status', 'status.id', '=', 'tickets.status_id')
                                            ->where('status.name', '=', 'Open')
                                            ->where('tickets.request_by', '=', Auth::user()->id)
                                            ->get());

            $amount_resolved_tickets    = count(Ticket::join('status', 'status.id', '=', 'tickets.status_id')
                                            ->where('status.name', '=', 'Resolved')
                                            ->where('tickets.request_by', '=', Auth::user()->id)
                                            ->get());

           

        } else {
            $amount_all_tickets         = count(Ticket::all());
            $amount_resolved_tickets    = count(Ticket::join('status', 'status.id', '=', 'tickets.status_id')
                                            ->where('status.name', '=', 'Resolved')
                                            ->get());
        }
    
        

        // var_dump(count(Ticket::all()));
        // die();

        return view('dashboard', [
            'amount_all_tickets'        => $amount_all_tickets,
            'amount_resolved_tickets'   => $amount_resolved_tickets,
            'amount_open_tickets'       => $amount_open_tickets
        ] );
    }
}
