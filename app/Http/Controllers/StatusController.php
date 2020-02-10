<?php

namespace App\Http\Controllers;
use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return Status::all();
    }

    public function show($id)
    {
        return Status::find($id);
    }

    public function store(Request $request)
    {
        $status = Status::create($request->all());

        return response()->json($status, 201);
    }

    public function update(Request $request, Status $status)
    {
        $status->update($request->all());

        return response()->json($status, 200);
    }

    public function delete(Status $status)
    {
        $status->delete();

        return response()->json(null, 204);
    }
}
