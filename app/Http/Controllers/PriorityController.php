<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Priority;
use App\Status;

class PriorityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $priority = Priority::paginate(5);
        return view('priority.index', ['priority' => $priority]);
    }

    public function create()
    {
        return view('priority.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        $data = $request->all();

        Priority::create($data);

        return redirect()->route('priority.index');
    }

    public function show($id)
    {
        $priority = Priority::find($id);
        return view('priority.show', ['priority' => $priority]);
    }

    public function edit($id)
    {
        $priority = Priority::find($id);
        return view('priority.edit', ['priority' => $priority]);
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        $data = $request->all();

        $priority = Priority::find($id)->update($data);

        return redirect()->route('priority.index');
    }

    public function destroy($id)
    {
        $priority = Priority::find($id)->delete();

        return redirect()->route('priority.index');
    }
}
