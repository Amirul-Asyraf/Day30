<?php
    require './db.php';
    // session_start();
    require './model/tacno.inc.php';

    $phone_tac = $_SESSION['phone'];
    $user_id = $_SESSION['cust-id'];
    $gen_tac = [];

    // if(isset($phone_tac, $user_id)) {

    //     for($i=0; $i < 6; $i++) {
    //         $rand_num = rand(0,9);
    //         array_push($gen_tac, $rand_num);
    //     }
    
    //     $tac = implode("", $gen_tac);
    //     //Save TAC to database
    //     newTAC($tac, $phone_tac, $user_id, $conn);
    // }

    if(isset($_POST['tac1'], $_POST['tac2'], $_POST['tac3'], $_POST['tac4'], $_POST['tac5'], $_POST['tac6'])) {
        $tac1 = $_POST['tac1'];
        $tac2 = $_POST['tac2'];
        $tac3 = $_POST['tac3'];
        $tac4 = $_POST['tac4'];
        $tac5 = $_POST['tac5'];
        $tac6 = $_POST['tac6'];

        $tac_input = [$tac1, $tac2, $tac3, $tac4, $tac5, $tac6];
        $tac_input_conc = implode("", $tac_input);

        $db_tac = getTac($user_id, $conn);

        if(isset($_POST['tac-submit'])) {
            if($tac_input_conc == $db_tac) {
                echo "<br>TAC Match!";
                header("location: ./scanner.php");
            } else {
                echo "<br>TAC does not match!";
                header("./tacno.php");
            }
    
        }
    }
    
    

    echo "<br>";
    // var_dump($tac_input_conc);
    echo "this is tac from user: ".$tac_input_conc ?? null;
    echo "<br>";
    // var_dump($tac);
    echo "this is tac from db: ".$tac;
    echo "<br>";
    // echo $exist_tac;

    
    
?>