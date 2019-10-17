<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $tickets = Ticket::paginate(10);
        return view('tickets.index', $tickets);
    }

    public function create() {
        //
        return view('tickets.create');
    }

    public function store(Request $request) {
        //
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id) {
        //
    }
}
