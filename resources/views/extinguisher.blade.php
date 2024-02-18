@include('Layout.Sidebar')
@include('Layout.Topbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extinguisher</title>
    <link rel="stylesheet" type="text/css" href="extinguisher.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>

    <div class="centered-box">
        <div class="flex-container">
            <a class="btn" href="AddNew"><i class="bx bx-plus-circle"></i>Add</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Barcode</th>
                    <th>Location</th>
                    <th>Inspection History</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Item 1</td>
                    <td>48000492242</td>
                    <td>ITS 304</td>
                    <td>
                        <p>Message</p>
                    </td>
                    <td>
                        <h5>InActive</h5>
                    </td>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <td>Dean Office</td>
                    <td>48000492242</td>
                    <td>
                        <p>Message</p>
                    </td>
                    <td>
                        <h5>Active</h5>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>

</body>
</html>
