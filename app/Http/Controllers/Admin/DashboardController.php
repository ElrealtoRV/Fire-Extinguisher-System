<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserList;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function showDashboard()
     {
 
            $users = UserList::all();
            $employeeCount = UserList::count();
            
         
    
            return view('admin.dashboard')->with('users', $users)->with('employeeCount', $employeeCount);
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
        //
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
