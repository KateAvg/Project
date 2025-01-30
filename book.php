<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
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
            text-align: center;
            padding: 20px;
        }
        header h1 {
            margin: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form label {
            display: block;
            margin: 10px 0 5px;
        }
        form input, form select, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            background-color: #333;
            color: white;
            cursor: pointer;
        }
        form button:hover {
            background-color: #555;
        }
        footer {
            text-align: center;
            background: #333;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Car Workshop</h1>
        <p>Book Your Appointment</p>
    </header>
    <div class="container">
        <h2>Book Your Appointment</h2>
        <form action="insert.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="service">Service:</label>
            <select id="service" name="service" required>
                <option value="oil_change">Oil Change</option>
                <option value="tire_replacement">Tire Replacement</option>
                <option value="engine_repair">Engine Repair</option>
                <option value="general_maintenance">General Maintenance</option>
            </select>
            <label for="date">Prefered Date:</label>
            <input type="date" id="date" name="prefered_date" required>
            <label for="time">Prefered Time:</label>
            <input type="time" id="time" name="prefered_time" required>
            <label for="message">Additional Comments:</label>
            <textarea id="message" name="message"></textarea>
            <button type="submit">Submit Booking</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2025 Car Workshop. All rights reserved.</p>
    </footer>
</body>
</html>


