<?php
    // $current_cust_name = $_SESSION['name'];

    function newUser($name, $conn) {
        $new_user = "INSERT INTO customers(name, status, date_created) VALUES ('$name', '1', NOW()) ";

        if ($name != null) {
            if ($conn->query($new_user) === FALSE) {
                // echo "New record created successfully";
                echo "Error: " . $new_user . "<br>" . $conn->error;
            } 
        }
    }

    function newID($name, $conn) {
        $select_user_id = "SELECT customers_id FROM customers WHERE name = '$name' ";
        $result_user_id = $conn->query($select_user_id);
        $row_user_id = $result_user_id->fetch_assoc();
        $user_id = $row_user_id['customers_id'];
        return $user_id;
    }

    function newPhone ($phone, $cust_name, $conn) {
        $new_phone = "UPDATE customers SET phone = '$phone' WHERE name = '$cust_name' ";
 
        if ($phone != null) {
            if ($conn->query($new_phone) === FALSE) {
                // echo "New record created successfully";
                echo "Error: " . $new_phone . "<br>" . $conn->error;
            } 
        }
    }

    // $sql_cust_name = "SELECT name FROM customers WHERE name = '$current_cust_name' ";
    // $sql_cust_phone = "SELECT phone FROM customers WHERE name = '$current_cust_name' ";
    // $sql_cust_created = "SELECT date_created FROM customers WHERE name = '$current_cust_name' ";

    // $result_name = $conn->query($sql_cust_name);
    // $result_phone = $conn->query($sql_cust_phone);
    // $result_created = $conn->query($sql_cust_created);

    // $row_name = $result_name->fetch_assoc();
    // $row_phone = $result_phone->fetch_assoc();
    // $row_created = $result_created->fetch_assoc();

    // $cust_name = $row_name['name'];
    // $cust_phone = $row_phone['phone'];
    // $cust_created = $row_created['date_created'];

?>