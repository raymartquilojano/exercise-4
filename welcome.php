<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    if (isset($_GET['name']) && isset($_GET['address']) && isset($_GET['age']) && isset($_GET['groupNo'])) {
        $name = htmlspecialchars($_GET['name']);
        $address = htmlspecialchars($_GET['address']);
        $age = htmlspecialchars($_GET['age']);
        $groupNo = htmlspecialchars($_GET['groupNo']);
        echo "<h2>GET Method Data:</h2>";
        echo "Name: " . $name . "<br>";
        echo "Address: " . $address . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Group No: " . $groupNo . "<br>";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['age']) && isset($_POST['groupNo'])) {
        $name = htmlspecialchars($_POST['name']);
        $address = htmlspecialchars($_POST['address']);
        $age = htmlspecialchars($_POST['age']);
        $groupNo = htmlspecialchars($_POST['groupNo']);
        echo "<h2>POST Method Data:</h2>";
        echo "Name: " . $name . "<br>";
        echo "Address: " . $address . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Group No: " . $groupNo . "<br>";
    }
}
?>