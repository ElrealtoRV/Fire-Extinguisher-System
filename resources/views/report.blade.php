

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report </title>
    <link rel="stylesheet" type="text/css" href="report.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
</head>

<body>
@include('Layout.Sidebar')
@include('Layout.Topbar')

    <main class="group">
    <div class="centered-box">
    <h2>Fire Extinguisher Report</h2>
        <div class="flex-container">
       
           

            <div class="form-row">
           
                <div class="choices">
                    <label for="startDatePicker">Start Date:</label>
                    <input type="date" id="startDatePicker" class="form-control">
                </div>
                <div class="choices">
                    <label for="endDatePicker">End Date:</label>
                    <input type="date" id="endDatePicker" class="form-control">
                </div>
           

            <button onclick="generateReport()" class="generate">Generate Report</button>
            </div>
        </div>
        <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="features">
						<h3>234</h3>
						<p>Fire Extinguisher</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="features">
						<h3>2834</h3>
						<p>Users</p>
					</span>
				</li>
                <li>
					<i class='bx bxs-group' ></i>
					<span class="features">
						<h3>2834</h3>
						<p>Employee</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="features">
						<h3>2543</h3>
						<p>Expired Fire Extinguisher</p>
					</span>
				</li>
			</ul>
            <ul class="box-info">
         
                <div class="data">
                    <canvas id="existingChart"></canvas>
                </div>
                <div class="data">
                    <canvas id="expiredChart"></canvas>
                </div>
                <div class="data">
                    <canvas id="employeeChart"></canvas>
                </div>
                <div class="data">
                    <canvas id="userChart"></canvas>
                </div>
            </div>
            </ul>
        <script src="report.js"></script>
        </div>

    </main>
        
</body>

</html>
