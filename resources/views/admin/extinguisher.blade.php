@include('admin.AdminLayout.Topbar')
@include('admin.AdminLayout.Sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extinguisher</title>
    <link rel="stylesheet" type="text/css" href="/extinguisher.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>

    <div class="centered-box">
        <div class="flex-container">
            <a class="btn" href="Addnew"><i class="bx bx-plus-circle"></i>Add</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Serial Number</th>
                    <th>Location</th>
                    <th>Installation Date</th>
                    <th>Expiration Date</th>
                    <th>Inspection Findings</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                     @php
						$extinguishers = \App\Models\FireExtinguisher::all();
					@endphp
                    @foreach($extinguishers as $extinguisher)
                    <tr>
                        <td>{{ $extinguisher->Type }}</td>
                        <td>{{ $extinguisher->Name }}</td>
                        <td>{{ $extinguisher->SerialNumber }}</td>
                        <td>{{ $extinguisher->Location }}</td>
                        <td>{{ $extinguisher->InstallationDate }}</td>
                        <td>{{ $extinguisher->ExpirationDate }}</td>
                        <td>{{ $extinguisher->InspectionFidings }}</td> <!--change this later make it multiple selection-->
                        <td>{{ $extinguisher->Status }}</td>
                    </tr>
                @endforeach
                </tr>
                
            </tbody>
        </table>
    </div>

</body>
</html>
