<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;


class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function SignDisplay()
    {
        return view('Auth.signup');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                   
        $validatedData = $request->validate([
            'email' => 'required|email|unique:admin_users,email',
            'employee_id' => 'required|string',
            'birthdate' => 'required|date',
            'username' => 'required|string|unique:admin_users,username',
            'department' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $adminUser = new AdminUser();
        $adminUser->email = $validatedData['email'];
        $adminUser->employee_id = $validatedData['employee_id'];
        $adminUser->birthdate = $validatedData['birthdate'];
        $adminUser->username = $validatedData['username'];
        $adminUser->department = $validatedData['department'];
        $adminUser->password = bcrypt($validatedData['password']); // Hash the password

        $adminUser->save();
        return redirect('login')->with('success', 'Account created successfully!');
        
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
