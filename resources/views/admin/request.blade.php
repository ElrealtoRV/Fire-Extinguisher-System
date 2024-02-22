
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="/user.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
@include('Layout.Topbar')
@include('Layout.Sidebar')
<div class="centered-box">
<div class="flex-container">
    <div>
        <select id="role" class="choices">
            <option selected disabled hidden>Select Request</option>
            <option>Password Reset</option>
            <option>Employee Approval</option>
        </select>
        
    </div>
    <form action="#" class="form-input">
        <input type="search" placeholder="Search...">
    </form>
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
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->Fname }} {{ $user->Mname }} {{ $user->Lname }}</td>
                    <td>{{ $user->Position }}</td>
                    <td> 
                    <div class="btn-container">
                        <a href="{{ route('admin/viewuser', $user->id) }}" class="btn btn-view">
                                <i class="bx bx-show"></i> View
                            </a>
                            <form method="GET" action="{{ route('admin.approve.user', ['id' => $user->id]) }}" onsubmit="return confirm('Are you sure you want to Approve this users Request?');">
                                @csrf
                                @method('approve')
                                <button type="submit" class="btn btn-Check">
                                    <i class="bx bx-Check"></i> Approve
                                </button>
                            </form>
                            <form method="GET" action="{{ route('admin.deny.user', ['id' => $user->id]) }}" onsubmit="return confirm('Are you sure you want to Deny this users Request?');">
                                @csrf
                                @method('Denied')
                                <button type="submit" class="btn btn-mistake">
                                    <i class="bx bx-mistake"></i> Deny
                                </button>
                            </form>
                    </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
    function confirmDelete(url) {
        if (confirm("Are you sure you want to delete this user?")) {
            window.location.href = url;
        }
    }
</script>
</body>
</html>