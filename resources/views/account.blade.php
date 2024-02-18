
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>
<body>
@include('Layout.Sidebar')
@include('Layout.Topbar')
<main class="group">
    <div class="account-box">
    <div class="flex-container">
            
            <h4 class="YA">Your account</h4>
            <div class="profile-box">
            <div class="profile">
            <h5 class="PP">Profile Photo</h5>
            <img src="img/fire.png" class="photo" id="profileImage"><br>
            <input type="file" id="fileInput" style="display: none;">
            <button type="button" class="RP" onclick="removePhoto()">Remove photo</button>
            <button type="button" class="CP" onclick="changePhoto()">Change Photo</button>
            <input type="file" id="fileInput" style="display: none;">
            </div>
            </div>
            <div class="data-box">
                    <div class="profile-informaton">
                        <p>Profile Information</p>
                    </div>
                    <div class="data">
                        <div class="input-container">
                        <form id="updateProfileForm" action="{{ route('update.profile') }}" method="POST">
                        @csrf
                            <label for="Email">Email</label>
                            <div class="input-with-icon">
                                <input type="text" id="Email" name="email" placeholder="Email" value="{{ $user->email }}" >
                                <i class="fas fa-pencil-alt edit-icon" onclick="toggleEdit('Email')"></i>
                            </div>
                        </div>
                        <label for="EmployeeID">Employee ID</label>
                        <input type="text" id="EmployeeID" name="employee_id" placeholder="ID" value="{{ $user->employee_id }}" readonly>
                        <label for="bdate">Birthday</label>
                        <input type="date" id="bdate" name="birthdate" placeholder="Enter your birthdate" value="{{ $user->birthdate }}" >
                        <div class="input-container">
                            <label for="Username">Username</label>
                            <div class="input-with-icon">
                                <input type="text" id="Username" name="username" placeholder="Username" value="{{ $user->username }}" disabled>
                                <i class="fas fa-pencil-alt edit-icon" onclick="toggleEdit('Username')"></i>
                            </div>
                        </div>
                        <div class="input-container">
                            <label for="Department">Department</label>
                            <div class="input-with-icon">
                                <input type="text" id="Department" name="department" placeholder="Department" value="{{ $user->department }}" disabled>
                                <i class="fas fa-pencil-alt edit-icon" onclick="toggleEdit('Department')"></i>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="saveBtn" style="display:none;">Save</button>
                    
                    </form>
                </div>
           <hr>
           </div>
        </div>
    </main>
    <script>
    function toggleEdit(fieldId) {
        const inputField = document.getElementById(fieldId);
        inputField.disabled = !inputField.disabled;
        document.getElementById('saveBtn').style.display = 'inline-block';
    }

    document.getElementById('updateProfileForm').addEventListener('submit', function () {
        // Additional validation or handling can be added here if needed
        document.getElementById('saveBtn').style.display = 'none';
    });
    
    
</script>
</body>
</html>