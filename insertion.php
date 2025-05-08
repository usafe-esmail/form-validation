<?php
$conn = mysqli_connect("localhost", "root", "", "blog");

if (!$conn) {
    die(" Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO EMP (id, name, email, password) 
        VALUES ('1234', 'yassof', 'yassof@gmail.com', '12345')";

$res = mysqli_query($conn, $sql);

if ($res) {
    echo " Data inserted successfully!";
} else {
    echo " Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
