<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use App\Models\UserList;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function UserDisplay()
    {
        
            // Fetch all users from the user_lists table
             $users = UserList::all();

    // Pass the users data to the view
    return view('admin.user', ['users' => $users]);
    }
    public function CreateUserDisplay()
    {
        return view('admin.CreateNew');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Fname' => 'required|string',
            'Mname' => 'nullable|string',
            'Lname' => 'required|string',
            'Age' => 'required|numeric',
            'Email' => 'required|email',
            'Contnum' => 'required|string',
            'Idnum' => 'required|string',
            'Position' => 'required|string',
            'Dept' => 'required|string',
            'Password' =>'required|string|min:6',
            // Add other validation rules for your form fields
        ]);
        $hashedPassword = bcrypt($request->input('Password'));
        // Create a new user
        UserList    ::create([
            'Fname' => $request->input('Fname'),
            'Mname' => $request->input('Mname'),
            'Lname' => $request->input('Lname'),
            'Age' => $request->input('Age'),
            'Email' => $request->input('Email'),
            'Contnum' => $request->input('Contnum'),
            'Idnum' => $request->input('Idnum'),
            'Position' => $request->input('Position'),
            'Dept' => $request->input('Dept'),
            'Password' => $hashedPassword,
        ]);
    
        // Redirect to the user list or other page
        return redirect()->route('admin/user')->with('success', 'Employee added successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = AdminUser::all(); // Fetch all users from the database
        return view('admin.user', compact('users'));
    }

    public function edit($id)
{
    $user = AdminUser::findOrFail($id); // Fetch the user by ID
    return view('admin.edit-user', compact('user'));
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect()->route('admin.user')->with('success', 'User updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        $user = UserList::find($id);

        // Check if the user exists
        if (!$user) {
            return redirect()->route('admin/user')->with('error', 'User not found');
        }
    
        // Delete the user
        $user->delete();
    
        // Redirect with a success message
        return redirect()->route('admin/user')->with('success', 'User deleted successfully');
    }

    public function ViewUser($id){
        $user = UserList::find($id);

        // Pass the user data to the view
        return view('admin.viewuser', ['user' => $user]);
    }

    public function filterUsers(Request $request)
    {
        $selectedRole = $request->input('role');
        
        // Fetch users based on the selected role
        $users = UserList::where('Position', $selectedRole)->get();

        // Render the user table partial view with the filtered users
        return view('admin.partials.user_table')->with('users', $users);
    }

}
