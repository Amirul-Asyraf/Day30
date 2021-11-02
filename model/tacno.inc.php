<?php

    function newTAC($tac, $phone_tac, $user_id, $conn) {
        $sql_tacno = "INSERT INTO tac(customers_id, phone, tac, created_at) VALUES ('$user_id', '$phone_tac', '$tac', NOW())  ";
        $result_tacno = $conn->query($sql_tacno);
        return $tac;
    }

    function getTAC($user_id, $conn) {
        $sql_display_tac = "SELECT tac FROM tac WHERE customers_id = '$user_id' ORDER BY tac_id DESC LIMIT 1";
        $result_display_tac = $conn->query($sql_display_tac);
        $row_display_tac = $result_display_tac->fetch_assoc();
        return $row_display_tac['tac'];
    }
?>