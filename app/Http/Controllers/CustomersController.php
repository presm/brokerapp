<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    //
    public function index()
    {
        return Customers::all();
    }

    public function show(Customers $customers)
    {
        return $customers;
    }

    public function store(Request $request)
    {
        $customers = Customers::create($request->all());

        return response()->json($customers, 201);
    }

    public function update(Request $request, Customers $customers)
    {
        $customers->update($request->all());

        return response()->json($customers, 200);
    }

    public function delete(Customers $customers)
    {
        $customers->delete();

        return response()->json(null, 204);
    }
}
