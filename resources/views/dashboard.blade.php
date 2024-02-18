@include('Layout.Topbar')
@include('Layout.Sidebar')

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
					<h1>Dashboardssss</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
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
						<input type="text" id="searchInput" placeholder="Search...">
						<i class='bx bx-search search-icon' ></i>
						<label for="filterDropdown"></label>
						<select id="filterDropdown">
							
						<option value="user"><i class="fas fa-user"></i> Users</option>
    					<option value="employee"><i class="fas fa-briefcase"></i> Employees</option>
						</select>
						
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
							<tr>
								<td>
									<img src="img/people.png">
									<p>Ronver Amper</p>
								</td>
								<td>Employee</td>
								<td><span class="status completed">Active</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Anthony Etom</p>
								</td>
								<td>User</td>
								<td><span class="status pending">InActive</span></td>
							</tr>
							
						</tbody>
					</table>
				</div>
						<div class="todo">
						<div class="head">
							<h3>Todo List</h3>
						</div>
						<form id="todoForm">
							@csrf
							<input type="text" class="Todo-Input" name="text" placeholder="Add a new todo" required>
							<button type="submit" id="addTodoButton" class="Todo-Button">Add Todo</button>
						</form>
						<ul class="todo-list">
							@foreach ($todos as $todo)
								<li>
									{{ $todo->text }}
									<i class='bx bx-dots-vertical-rounded'></i>
								</li>
							@endforeach
						</ul>
					</div>
					</div>
			<!-- Add Todo Modal -->
			<div class="modal" id="todoModal">
				<div class="modal-content">
					<span class="close-modal" id="closeModal">&times;</span>
					<div id="modalText"></div>
				</div>
			</div>
			<div class="scrollable-box">
        <p>Announcement Box</p>
            <textarea class="announcement" id="message" name="message" placeholder="Announcement"></textarea>
            <button type="button">Submit</button>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
    <script src="index.js"></script>
</body>
</html>