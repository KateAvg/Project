<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Car Workshop</h1>
        <p>Owner Dashboard - View Bookings</p>
    </header>
    <div class="container">
        <h2>All Bookings</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Service</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "car_workshop";
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                function formatServiceName($service) {
                    $serviceMap = [
                        "oil_change" => "Oil Change",
                        "tire_replacement" => "Tire Replacement",
                        "engine_repair" => "Engine Repair",
                        "general_maintenance" => "General Maintenance"
                    ];
                    return $serviceMap[$service] ?? $service;
                }
                $sql = "SELECT * FROM bookings ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output each booking as a table row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['phone']}</td>
                                <td>" . formatServiceName($row['service']) . "</td>
                                <td>{$row['prefered_date']}</td>
                                <td>{$row['prefered_time']}</td>
                                <td>{$row['message']}</td>
                                <td>{$row['created_at']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No bookings found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; 2025 Car Workshop. All rights reserved.</p>
    </footer>
</body>
</html>
