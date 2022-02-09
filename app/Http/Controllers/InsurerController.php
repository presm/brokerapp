<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insurer;

class InsurerController extends Controller
{
    //
    public function index()
    {
        return Insurer::all();
    }

    public function show(Insurer $insurer)
    {
        return $insurer;
    }

    public function store(Request $request)
    {
        $insurer = Insurer::create($request->all());

        return response()->json($insurer, 201);
    }

    public function update(Request $request, Insurer $insurer)
    {
        $insurer->update($request->all());

        return response()->json($insurer, 200);
    }

    public function delete(Insurer $insurer)
    {
        $insurer->delete();

        return response()->json(null, 204);
    }
}
