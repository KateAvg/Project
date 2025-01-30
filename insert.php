<html>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "car_workshop";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed! " . mysqli_connect_error());
        }
        echo "Connected Successfully!<br>";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $service = $_POST["service"];
            $prefered_date = $_POST["prefered_date"];
            $prefered_time = $_POST["prefered_time"];
            $message = $_POST["message"];

            $sql = "INSERT INTO bookings (name, email, phone, service, prefered_date, prefered_time, message)
                    VALUES (?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);

            $stmt->bind_param("sssssss", $name, $email, $phone, $service, $prefered_date, $prefered_time, $message);

            if ($stmt->execute()) {
                header("Location: thankyou.html");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    </body>
</html>



