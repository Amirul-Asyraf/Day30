<?php
    $current_cust_phone = $_SESSION['phone'];

    $sql_check_id = "SELECT checkin_id FROM checkin WHERE phone = '$current_cust_phone' ";
    $sql_check_location = "SELECT location FROM checkin WHERE phone = '$current_cust_phone' ";
    $sql_check_created = "SELECT date_created FROM checkin WHERE phone = '$current_cust_phone' ";

    $result_check_id = $conn->query($sql_check_id);
    $result_check_location = $conn->query($sql_check_location);
    $result_check_created = $conn->query($sql_check_created);

    $row_check_id = $result_check_id->fetch_assoc();
    $row_check_location = $result_check_location->fetch_assoc();
    $row_check_created = $result_check_created->fetch_assoc();

    $check_id = $row_check_id['checkin_id'];
    $check_location = $row_chceck_location['location'];
    $check_created = $row_check_created['date_created'];
?>