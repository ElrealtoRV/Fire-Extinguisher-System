<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="/style.css">
    
</head>
<body>
    <!-- SIDEBAR -->
<section id="sidebar">
		<a href="#" class="brand">
			<span class="text1">Fire<i class="fas fa-fire-extinguisher"></i> Extinguisher <p style="font-size:10px"> Mapping & Monitoring System</p></span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="user">
				<i class='bx bxs-user' ></i>
					<span class="text">User</span>
				</a>
			</li>
			<li>
				<a href="#">
				<i class='bx bxs-map' ></i>
					<span class="text">Map</span>
				</a>
			</li>
			<li>
				<a href="request">
					<i class='bx bxs-message-alt' ></i>
					<span class="text">Request</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="settingView">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
</section>
	<!-- SIDEBAR -->
	<script src="{{ asset('public/index.js') }}"></script>

</body>
</html>