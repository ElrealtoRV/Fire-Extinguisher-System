
@include('admin.AdminLayout.Topbar')
@include('admin.AdminLayout.Sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="/create.css">
</head>
<body>
    
    <main>
        <div class="centered-box">
        <div class="flex-container">
            <h2> Add An Employee </h2><br>
           
            <form method="post" action="{{ route('admin.store.user') }}">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="form-group">
            <label for="Fname" id="Fname" name="Fname">FirstName</label>
            <input type="text" id="Fname" for="Fname" name="Fname" placeholder="Firstname" required>
            
            <label for="Mname" id="Mname" name="Mname">MiddleName</label>
            <input type="text" id="Mname" for="Mname" name="Mname" placeholder="Middlename" required>

            <label for="Lname" id="Lname" name="Lname">LastName</label>
            <input type="text" id="Lname" for="Lname" name="Lname" placeholder="Lastname" required>

            <label for="Age" id="Age" name="Age">Age</label>
            <input type="number" id="Age" for="Age" name="Age" placeholder="Age" required>

            <label for="Email" id="Email" name="Email">Email</label>
            <input type="email" id="Email" for="Email" name="Email" placeholder="Email" required>

            <label for="Contnum" id="Contnum" name="Contnum">Contact Number</label>
            <input type="Texts" id="Contnum" for="Contnum" name="Contnum" placeholder="Contact number" required>

            <label for="Idnum" id="Idnum" name="Idnum">Employee ID</label>
            <input type="Texts" id="Idnum" for="Idnum" name="Idnum" placeholder="Employee ID" required>

            <label for="Position" id="Position" name="Position">Position</label>
            <select id="role" class="Pos1" name="Position">
                <option value="" class="SP"disabled selected required>Select Position</option>
                <option value="HEAD">HEAD</option>
                <option value="MAINTENANCE PERSONNEL">MAINTENANCE PERSONNEL</option>
                <option value="USER">USER</option>
            </select>


            <label for="Password" id="Password" name="Password">Password</label>
            <input type="Password" id="Password" for="Password" name="Password" placeholder="Password" required>

            <label for="Dept" id="Dept" name="Dept">Department</label>
            <input type="Dept" id="Dept" for="Dept" name="Dept" placeholder="Department" required>
            </div>
            <a href="{{ route('admin/user') }}" class="back1">Back</a>
            <button type="submit">Add Employee</button>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            </form>
        </div>
</div>
    </main>
</body>
</html>