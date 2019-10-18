<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Validation\Validator;
use App\Status;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role_permission');
    }

    public function index()
    {
        $status = Status::paginate(5);
        return view('status.index', ['status' => $status]);
    }

    public function create()
    {
        return view('status.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        $data = $request->all();

        Status::create($data);

        return redirect()->route('status.index');
    }

    public function show($id)
    {
        $status = Status::find($id);
        return view('status.show', ['status' => $status]);
    }

    public function edit($id)
    {
        $status = Status::find($id);
        return view('status.edit', ['status' => $status]);
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        $data = $request->all();

        $status = Status::find($id)->update($data);

        return redirect()->route('status.index');
    }

    public function destroy($id)
    {
        $status = Status::find($id)->delete();

        return redirect()->route('status.index');
    }
}
