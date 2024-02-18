@include('admin.AdminLayout.Topbar')
@include('admin.AdminLayout.Sidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="/user.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<style>
.data-box {
    background-color: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin: 20px 0;
}

.profile-information p {
    margin: 10px 0;
    font-size: 16px;
    font-weight: bold;

}

.data {
    width: 100%;
    border-collapse: collapse;
}

.input-container {
    border-bottom: 1px solid #e0e0e0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.input-container:last-child {
    border-bottom: none;
}

.input-container p {
    padding: 15px;
    margin: 0;
}

#saveBtn {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    float: right;
    margin: 20px;
    transition: background-color 0.3s;
}

#saveBtn:hover {
    background-color: #2980b9;
}
</style>
<body>
    <main class="group">
        <div class="account-box">
            <div class="flex-container">
                <h4 class="YA">User Account</h4>
                <div class="profile-box">
                    <div class="profile">
                        <h5 class="PP">Profile Photo</h5>
                        <img src="img/fire.png" class="photo" id="profileImage"><br>
                    </div>
                </div>
                <div class="data-box">
                    <div class="profile-information">
                        <p>Profile Information</p>
                    </div>
                    <div class="data">
                        <div class="input-container">
                            @if($user)
                                <p>Name: {{ $user->Fname }} {{ $user->Mname }} {{ $user->Lname }}</p>
                                <p>Age: {{ $user->Age }}</p>
                                <p>Email: {{ $user->Email }}</p>
                                <p>Contact Number: {{ $user->Contnum }}</p>
                                <p>Id Number: {{ $user->Idnum }}</p>
                                <p>Position: {{ $user->Position }}</p>
                                <p>Department: {{ $user->Dept }}</p>
                            @else
                                <p>User not found.</p>
                            @endif
                        </div>
                        <a href="{{ route('admin/user') }}">Back</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
