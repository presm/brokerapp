<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policies;

class PoliciesController extends Controller
{
    //
    public function index()
    {
        return Policies::all();
    }

    public function show(Policies $policy)
    {
        return $policy;
    }

    public function store(Request $request)
    {
        $policy = Policies::create($request->all());

        return response()->json($policy, 201);
    }

    public function update(Request $request, Policies $policy)
    {
        $policy->update($request->all());

        return response()->json($policy, 200);
    }

    public function delete(Policies $policy)
    {
        $policy->delete();

        return response()->json(null, 204);
    }
}
