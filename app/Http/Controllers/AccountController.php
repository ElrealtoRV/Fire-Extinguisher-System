<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AccountDisplay()
    {
        return view('account');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAccount(Request $request)
    {
        $user = Auth::user(); // Retrieve the authenticated user

        return view('account', ['user' => $user]);
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
    public function updateProfile(Request $request)
    {
        
     // Ensure the user is logged in
     if (Auth::check()) {
        // Retrieve authenticated user
        $user = Auth::user();

        // Perform validation
        $validatedData = $request->validate([
            'email' => 'required|email',
            'username' => 'required|string',
            'department' => 'required|string',
        ]);

        // Update user information using the update method
        $user->update($validatedData);

        // Redirect back or return a response
        return redirect('/account')->with('success', 'Profile updated successfully');
    }

    // If the user is not logged in, handle accordingly (e.g., redirect to login)
    return redirect('/login')->with('error', 'Please log in to update your profile.');
}
   
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
