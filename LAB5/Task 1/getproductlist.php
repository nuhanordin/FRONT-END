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



    $parameter = $_GET['q'];
    $sql = "SELECT * FROM products where productLine = '" . $parameter . "'";
    $result = $conn->query($sql);
    echo "<table>";

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row["productCode"] . "</td>
            <td>" . $row["productName"] . "</td>
            <td>" . $row["productLine"] . "</td>
            <td>" . $row["productScale"] . "</td>
            <td>" . $row["productVendor"] . "</td>
            <td>" . $row["productDescription"] . "</td>
            <td>" . $row["quantityInStock"] . "</td>
            <td>" . $row["buyPrice"] . "</td>
    </tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
</body>

</html>
