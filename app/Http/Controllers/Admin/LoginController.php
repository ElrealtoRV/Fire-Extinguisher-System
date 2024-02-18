<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showAdminLoginForm()
    {
        return view('Auth.admin.login', ['url' => 'Auth/admin/login']);
    }
    
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
            // The user is logged in.

            // Check if the authenticated user is an admin using the AdminMiddleware logic.
            if (Auth::user()->isAdmin()) { 
                return redirect()->intended('/admin/dashboard');
            }

            // If not an admin, logout the user and redirect with an error message.
            Auth::logout();
            return redirect('/login')->with('error', 'You do not have the required permissions to access this page.');
        }

        return redirect()->route('Auth/admin/login')->with('error', 'Wrong Username and Password');
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
    public function logout()
{
    Auth::logout();

    return redirect('/admin/login')->with('success', 'Logout successful');
}
}
