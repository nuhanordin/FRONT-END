<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myproduct";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT productLine FROM productlines";
    $result = $conn->query($sql);
    echo "<form>";
    echo "<select name= 'customers' onchange='showCustomer(this.value)'>";
    echo "<option value =''> Select a customer: </option>";

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["productLine"] . "'>" . $row["productLine"] . "</option>";
        }
        echo "</select></form>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>