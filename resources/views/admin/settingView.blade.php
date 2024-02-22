
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" type="text/css" href="/user.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>

<body>
@include('Layout.Topbar')
@include('Layout.Sidebar')
            
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
                    <p class="text6">Receive notifications for Users Feedback</p>
                    <div class="switch-container">
                        <input type="checkbox" id="systemUpdatesSwitch">
                        <label for="systemUpdatesSwitch" class="switch"></label>
                    </div>
                    </div>

                    <div class="notification-category">
                    <h5>Offline Mode</h5>
                    <p class="text6">Store and deliver notifications when back online.</p>
                    <div class="switch-container">
                        <input type="checkbox" id="offlineModeSwitch">
                        <label for="offlineModeSwitch" class="switch"></label>
                    </div>
                    </div>

                    <div class="notification-category">
                    <h5>Time Windows</h5>
                    <p class="text6">Set time windows to receive notifications.</p>
                    <div class="notification-options">
                        <!-- Include options for time windows -->
                        <!-- Example options: -->
                        <input type="time" id="startWindow">
                        <label for="startWindow">Start Time</label>

                        <input type="time" id="endWindow">
                        <label for="endWindow">End Time</label>

                        <!-- Add more options as needed... -->
                    </div>      
                    </div>


                </div>
                </div>

    
</body>
</html>