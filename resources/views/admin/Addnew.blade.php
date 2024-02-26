
@include('admin.AdminLayout.Topbar')
@include('admin.AdminLayout.Sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add FireExtinguisher</title>
    <link rel="stylesheet" type="text/css" href="/create.css">
</head>
<body>
    
    <main>
        <div class="centered-box">
        <div class="flex-container">
            <h2> Add Fire-Extinguisher</h2><br>
           
            <form method="post" action="{{ route('admin.extinguisher.addnew') }}">

            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="Type">Type</label>
                    <select id="Type" name="Type" required>
                        <option value="Water">Water</option>
                        <option value="Foam">Foam</option>
                        <option value="Carbon Dioxide (CO2)">Carbon Dioxide (CO2)</option>
                        <option value="Dry Chemical">Dry Chemical</option>
                        <option value="Wet Chemical">Wet Chemical</option>
                    </select>

                    <label for="Name">Name</label>
                    <select id="Name" name="Name" required>
                        <option value="Water">Water</option>
                        <option value="AFFF (Aqueous Film-Forming Foam)">AFFF (Aqueous Film-Forming Foam)</option>
                        <option value="CO2">CO2</option>
                        <option value="ABC Dry Chemical">ABC Dry Chemical</option>
                        <option value="Wet Chemical">Wet Chemical</option>
                    </select>

                    <label for="SerialNumber">SerialNumber</label>
                    <input type="text" id="SerialNumber" name="SerialNumber" placeholder="SerialNumber" required>

                    <label for="Location">Location</label>
                    <input type="text" id="Location" name="Location" placeholder="Location" required>

                    <label for="InstallationDate">Installation Date</label>
                    <input type="date" id="InstallationDate" name="InstallationDate" placeholder="InstallationDate" required>

                    <label for="ExpirationDate">Expiration Date</label>
                    <input type="date" id="ExpirationDate" name="ExpirationDate" placeholder="Expiration Date" required>


                    <label for="InspectionFindings">Inspection Findings</label>
                    <select id="InspectionFindings" name="InspectionFindings" required>
                        <option value="Gauge: Normal">Gauge: Normal</option>
                        <option value="Gauge: Not Normal">Gauge: Not Normal</option>
                        <option value="Tamper Seal: Intact">Tamper Seal: Intact</option>
                        <option value="Tamper Seal: Not Intact">Tamper Seal: Not Intact</option>
                        <option value="Pin & Clip: Secure">Pin & Clip: Secure</option>
                        <option value="Pin & Clip: Not Secure">Pin & Clip: Not Secure</option>
                        <option value="Function: Appears Functional">Function: Appears Functional</option>
                        <option value="Function: Not Functional">Function: Not Functional</option>
                    </select>


                    <label for="Status">Status</label>
                    <select id="Status" name="Status" required>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>

                <a href="{{ route('admin/extinguisher') }}" class="back1">Back</a>
                <button type="submit">Add</button>
            </form>
        </div>
</div>
    </main>
</body>
</html>