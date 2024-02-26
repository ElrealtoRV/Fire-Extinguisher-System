<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TopBarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function TopDisplay()
    {
        return view('admin.topbar');
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
    public function showUsername(string $id)
    {
        $username = Auth::user()->username;

        // Pass the username to the view
        return view('Layout.Topbar', ['username' => $username]);
    }
    /**
     * Update the speci.fied resource in storage.
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
