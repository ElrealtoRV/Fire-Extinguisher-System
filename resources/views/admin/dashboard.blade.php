@include('admin.AdminLayout.Topbar')
@include('admin.AdminLayout.Sidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Admin | Dashboard</title>
</head>
<body>
    <!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class="fas fa-fire-extinguisher"></i>
					<span class="text">
						<h3>234</h3>
						<p>Fire Extinguisher</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Users</p>
					</span>
				</li>
				<li>
					<i class='fas fa-briefcase' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Employee</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>2543</h3>
						<p>Expired Fire Extinguisher</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="user-list">
						<h3>Lists of Users & Employee</h3>
						<form method="get" action="/dashboard">
						<input type="text" id="searchInput" placeholder="Search...">
						<i class='bx bx-search search-icon' ></i>
						<label for="filterDropdown"></label>
						<select id="filterDropdown" name="users_filter">
							
						<option value="user"><i class="fas fa-user"></i> Users</option>
    					<option value="employee"><i class="fas fa-briefcase"></i> Employees</option>
						</select>
						</form>
						</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Role</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						@forelse($users as $user)
							<tr data-type="user">
								<td>
									<img src="img/people.png">
									<p>{{ $user->Fname }} {{ $user->Lname }}</p>
								</td>
								<td>{{ $user->Position }}</td>
								<td><span class="status {{ $user->status }}">{{ $user->status }}</span></td>
							</tr>
							@empty

							
							<tr>
								<td colspan="3">No users found</td>
							</tr>
						@endforelse
						</tbody>
					</table>
					</div>
					
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<!-- Your HTML code remains unchanged -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const filterDropdown = document.getElementById('filterDropdown');
    const searchInput = document.getElementById('searchInput');
    const rows = document.querySelectorAll('tbody tr');

    // Event listener for changes in dropdown or search input
    function handleSearchAndFilter() {
        const selectedOption = filterDropdown.value.toLowerCase();
        const searchText = searchInput.value.toLowerCase();

        // Example: Change H3 text based on the selected option
        const h3Element = document.querySelector('.user-list h3');
        h3Element.textContent = `List of ${selectedOption.charAt(0).toUpperCase() + selectedOption.slice(1)}`;

        // Filter table rows based on search text and selected option
        rows.forEach(row => {
            const userText = row.querySelector('td p').textContent.toLowerCase();
            const userType = row.getAttribute('data-type').toLowerCase();

            // Check if the search text matches and the user type is the selected option
            const showRow = (selectedOption === 'all' || ((selectedOption === 'employee' && (userPosition === 'head' || userPosition === 'maintenance personnel')) || userType === selectedOption)) && userText.includes(searchText);

            row.style.display = showRow ? '' : 'none';
        });
    }

    // Attach the event listener to the dropdown and search input
    filterDropdown.addEventListener('change', handleSearchAndFilter);
    searchInput.addEventListener('input', handleSearchAndFilter);

    // Event listener for the search icon
    const searchIcon = document.querySelector('.search-icon');
    searchIcon.addEventListener('click', function () {
        handleSearchAndFilter();
    });
});
	
</script>
</body>
</html>