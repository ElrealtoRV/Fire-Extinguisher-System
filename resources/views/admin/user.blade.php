
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="/user.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>
<body>
@include('admin.AdminLayout.Topbar')
@include('admin.AdminLayout.Sidebar')
<div class="centered-box">
<div class="flex-container">
    <div>
        <select id="role" class="choices" onchange="change()">
        <option selected disabled hidden>Select Role</option>
        <option id="employee"value="Head">Office Head</option>
        <option id="employee"value="Maintenance Personnel">Maintenance Personnel</option>
        <option id="users"value="Users">USERS</option>
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

<div class="table-responsive">
    <table>
        <thead class="headTitle">
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="userTableBody">

            @forelse($users as $user)
                 <tr data-role="{{ $user->Position }}">
                    <td>{{ $user->Fname }} {{ $user->Mname }} {{ $user->Lname }}</td>
                    <td>{{ $user->Position }}</td>
                    <td>
                        <div class="btn-container">
                            <a href="{{ route('admin/viewuser', $user->id) }}" class="btn btn-view">
                                <i class="bx bx-show"></i> View
                            </a>
                            <form method="GET" action="{{ route('admin.delete.user', ['id' => $user->id]) }}" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">
                                    <i class="bx bx-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                
                @empty
                <tr>
                    <td colspan="3">No users found</td>
                </tr>
                @endforelse

                @php
                $rowCount = 10; // Set the initial number of rows to display
                @endphp

                @for ($i = 0; $i < $rowCount; $i++)
                    <tr class="emptyB">
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endfor
        </tbody>
    </table>
</div>

    <script>
        function change() {
                var selectedRole = document.getElementById('role').value;

                // Send an AJAX request to fetch filtered users
                $.ajax({
                    url: "{{ route('admin.filter.users') }}",
                    method: 'GET',
                    data: { role: selectedRole },
                    success: function (data) {
                        // Replace the tbody content with the new data
                        $('#userTableBody').html(data);
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            }
        function confirmDelete(url) {
            if (confirm("Are you sure you want to delete this user?")) {
                window.location.href = url;
            }
        }
    </script>
</body>
</html>