@include('admin.AdminLayout.Topbar')
@include('admin.AdminLayout.Sidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body{
            background-color: #eee;
        }

        .map-container {
            max-width: 1170px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .map-controls {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container map-container">
        <h1 class="text-center mb-4">Building Map</h1>
        
        <div class="form-group map-controls">
            <label for="buildingDropdown">Select Building:</label>
            <select class="form-control" id="buildingDropdown" onchange="loadBuildingMap()">
                <option value="building1">Building 1</option>
                <option value="building2">Building 2</option>
                <!-- Add more building options as needed -->
            </select>
        </div>

        <div id="mapPlaceholder" class="text-center">
            <!-- The selected map will be loaded here -->
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        function loadBuildingMap() {
            var selectedBuilding = document.getElementById('buildingDropdown').value;

            // You can use AJAX to load the map content dynamically
            $.ajax({
                url: "/get-map", // Replace with your actual route for fetching the building map
                method: 'GET',
                data: { building: selectedBuilding },
                success: function (data) {
                    // Replace the mapPlaceholder content with the fetched map data
                    $('#mapPlaceholder').html(data);
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }
    </script>
</body>
</html>
