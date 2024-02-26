<!-- CONTENT -->
<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<div class="dropdown" id="dropdown">
				<a href="#" class="profile">
					@if(auth('admin')->check())
						<div class="Tname" style="color: black !important;">{{ auth('admin')->user()->name }}</div>
					@endif
				</a>
				<div class="dropdown-content" id="dropdown-content">
					<a href="settingView">Settings</a>
					<a href="{{ route('admin/logout') }}">Logout</a>
				</div>
			</div>

		</nav>
        <script src="/index.js"></script>
		<!-- NAVBAR -->