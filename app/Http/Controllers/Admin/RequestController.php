<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserList;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ReqDisplay()
    {
        $users = UserList::all(); // Fetch all users from the database
        return view('admin.request', compact('users'));
    }
    public function approve(string $id)
{
    // Find the user by ID
    $user = UserList::find($id);

    // Check if the user exists
    if (!$user) {
        return redirect()->route('admin.request')->with('error', 'User not found');
    }

    // Add your approval logic here
    // For example, you might update a 'status' field in your user table

    // Redirect with a success message
    return redirect()->route('admin.request')->with('success', 'User approved successfully');
}


    public function Deny(string $id)
{
    // Find the user by ID
    $user = UserList::find($id);

    // Check if the user exists
    if (!$user) {
        return redirect()->route('admin.request')->with('error', 'User not found');
    }

    // Add your approval logic here
    // For example, you might update a 'status' field in your user table

    // Redirect with a success message
    return redirect()->route('admin.request')->with('success', 'User Denied');
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
