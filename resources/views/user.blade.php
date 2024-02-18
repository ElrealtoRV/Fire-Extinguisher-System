
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
@include('Layout.Sidebar')
@include('Layout.Topbar')
<div class="centered-box">
<div class="flex-container">
    <div>
        <select id="role" class="choices">
            <option selected disabled hidden>Select Role</option>
            <option>Users</option>
            <option>Employee</option>
        </select>
        <select id="status" class="choices">
            <option selected disabled hidden>Status</option>
            <option>Active</option>
            <option>Inactive</option>
            <option>Pending</option>
        </select>
        
    </div>
    <form action="#" class="form-input">
        <input type="search" placeholder="Search...">
    </form>
    <a class="btn" href="CreateNew"><i class="bx bx-plus-circle"></i> Create new</a>
</div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Ronver Amper</td>
                    <td>User</td>
                    <td>

                        <button>Edit</button>
                        <button>View</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Mary Joy Etom</td>
                    <td>Employee</td>
                    <td>
                        <button>Edit</button>
                        
                        <button>View</button>
                        <button>Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="index.js"></script>
</body>
</html>