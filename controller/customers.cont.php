<?php
    if(isset($_POST['next'])) {
        $name = $_POST['name'];

        require './model/customers.inc.php';

        //insert into database table: customers
        newUser($name, $conn);
        $user_id = newID($name, $conn);
        $_SESSION['name'] = $name;
        $_SESSION['cust-id'] = $user_id;

        header("location: mobileno.php");
    }

    if(isset($_POST['request'])) {
        $phone = $_POST['phone'];
        $cust_name = $_SESSION['name'];

        require './model/customers.inc.php';

        //insert phone into database table: customers
        newPhone($phone, $cust_name, $conn);
        $_SESSION['phone'] = $phone;

        header("location: tacno.php");
    }
?>