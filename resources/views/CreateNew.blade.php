@include('Layout.Sidebar')
@include('Layout.Topbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="create.css">
</head>
<body>
    <main>
        <div class="centered-box">
        <div class="flex-container">
            <h2> Add An Employee </h2><br>
            <div class="form-group">
            <label for="Fname" id="Fname" name="Fname">FirstName</label>
            <input type="text" id="Fname" for="Fname" name="Fname" placeholder="Firstname">
            
            <label for="Mname" id="Mname" name="Mname">MiddleName</label>
            <input type="text" id="Mname" for="Mname" name="Mname" placeholder="Middlename">

            <label for="Lname" id="Lname" name="Lname">LastName</label>
            <input type="text" id="Lname" for="Lname" name="Lname" placeholder="Lastname">

            <label for="Age" id="Age" name="Age">Age</label>
            <input type="number" id="Age" for="Age" name="Age" placeholder="Age">

            <label for="Email" id="Email" name="Email">Email</label>
            <input type="text" id="Email" for="Email" name="Email" placeholder="Email">

            <label for="Contnum" id="Contnum" name="Contnum">Contact Number</label>
            <input type="Texts" id="Contnum" for="Contnum" name="Contnum" placeholder="Contact number">

            <label for="Idnum" id="Idnum" name="Idnum">Employee ID</label>
            <input type="Texts" id="Idnum" for="Idnum" name="Idnum" placeholder="Employee ID">

            <label for="Position" id="Position" name="Position">Position</label>
            <input type="Position" id="Position" for="Position" name="Position" placeholder="Position">

            <label for="Dept" id="Dept" name="Dept">Department</label>
            <input type="Dept" id="Dept" for="Dept" name="Dept" placeholder="Department">
            <a href="user">Back</a>
            </div>
           
            <button>Add Employee</button>
            
        </div>
</div>
    </main>
</body>
</html>