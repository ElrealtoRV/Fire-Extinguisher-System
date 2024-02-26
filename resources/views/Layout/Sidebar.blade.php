<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
</head>
<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <span class="text1">Fire<i class="fas fa-fire-extinguisher"></i> Extinguisher <p style="font-size:10px"> Mapping & Monitoring System</p></span>
        </a>
        <ul class="side-menu top">
          
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('admin/dashboard') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->is('user') ? 'active' : '' }}">
                    <a href="{{ url('admin/user') }}">
                        <i class='bx bxs-user'></i>
                        <span class="text">User</span>
                    </a>
                </li>
                <li class="{{ request()->is('request') ? 'active' : '' }}">
                    <a href="{{ url('admin/request') }}">
                        <i class='bx bxs-message-alt'></i>
                        <span class="text">Request</span>
                    </a>
                </li>
                <li class="{{ request()->is('settingView') ? 'active' : '' }}">
                    <a href="{{ url('admin/settingView') }}">
                        <i class='bx bxs-cog'></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <li class="{{ request()->is('Admin/login') ? 'active' : '' }}">
                    <a href="{{ url('admin/login') }}" class="logout">
                        <i class='bx bxs-log-out-circle'></i>
                        <span class="text">Logout</span>
                    </a>
                </li>

            </li>
        
                <li class="{{ request()->is('Headdashboard') ? 'active' : '' }}">
                    <a href="{{ url('Head/dashboard') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->is('user') ? 'active' : '' }}">
                    <a href="{{ url('Head/user') }}">
                        <i class='bx bxs-user'></i>
                        <span class="text">User</span>
                    </a>
                </li>
                <li class="{{ request()->is('map') ? 'active' : '' }}">
                    <a href="{{ url('Head/map') }}">
                        <i class='bx bxs-map'></i>
                        <span class="text">Map</span>
                    </a>
                </li>
                <li class="{{ request()->is('extinguisher') ? 'active' : '' }}">
                    <a href="{{ url('Head/extinguisher') }}">
                        <i class="fas fa-fire-extinguisher"></i>
                        <span class="text2">Fire Extinguisher</span>
                    </a>
                </li>
                <li class="{{ request()->is('request') ? 'active' : '' }}">
                    <a href="{{ url('Head/request') }}">
                        <i class='bx bxs-message-alt'></i>
                        <span class="text">Request</span>
                    </a>
                </li>
                <li class="{{ request()->is('report') ? 'active' : '' }}">
                    <a href="{{ url('Head/report') }}">
                        <i class='bx bxs-report'></i>
                        <span class="text">Report</span>
                    </a>
                </li>
                <li class="{{ request()->is('settingView') ? 'active' : '' }}">
                    <a href="{{ url('Head/settingView') }}">
                        <i class='bx bxs-cog'></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
       
        </ul>
    </section>
    <!-- SIDEBAR -->
    <script src="{{ asset('/index.js') }}"></script>
</body>
</html>
