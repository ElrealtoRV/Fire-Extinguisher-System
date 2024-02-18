
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>

<body>
@include('Layout.Sidebar')
@include('Layout.Topbar')
<main class="group3">
    <div class="setting2-box">
    <div class="flex-container">
            
            
            <div class="setting-box">
            <h2 class="P">Profile</h2>
            <div class="profile">
            
            <h5 class="PP1">Profile Photo</h5>
            <div class="changeP">
                <button class="profileButton">
                    <img src="img/fire.png" class="photo1" id="profileImage">
                    <span>Change</span>
                </button>
            </div>
            </div>
            <div class="text5">
            <h5 class="ChangeP">Account Settings</h5>
            <p >Change your password. <a href="account"> Manage</a></p>
            <h5 class="ChangeN">Change Name</h5>
            <p >To change your name, go to your <a href="account"> Account Settings</a>.</p>
            </div>
            </div>
           <hr>
           </main>
           <main class="group1">
                <div class="notification-box">
                <div class="setting2-box">
                    <h2 class="P">Notification Settings</h2>
                    
                    <div class="notification-category">
                        <h5 >Fire Extinguisher Alerts</h5>
                        <p class="text6">Receive notifications for fire extinguisher-related alerts.</p>
                        <div class="switch-container">
                            <input type="checkbox" id="fireExtinguisherSwitch">
                            <label for="fireExtinguisherSwitch" class="switch"></label>
                        </div>
                    </div>
                    <div class="notification-category">
                        <h5 >New User Alert</h5>
                        <p class="text6">Enable this notification to receive alerts when a new user signs up.</p>
                        <div class="switch-container">
                            <input type="checkbox" id="commentsSwitch">
                            <label for="commentsSwitch" class="switch"></label>
                        </div>
                    </div>
                    <div class="notification-category">
                    <h5 >System Updates</h5>
                    <p class="text6">Receive notifications for system updates and maintenance.</p>
                    <div class="switch-container">
                        <input type="checkbox" id="systemUpdatesSwitch">
                        <label for="systemUpdatesSwitch" class="switch"></label>
                    </div>
                    </div>
                </div>
                </div>
    </main>
    
</body>
</html>