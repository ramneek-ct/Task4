<?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $f_n = $_POST['first_n'] ;
            $l_n = $_POST['last_n'] ;
            $ph_no = $_POST['phn'] ;
             
            $output = ['firstname' => $f_n,
            'lastname' => $l_n,
            'phone' => $ph_no];
            header('Content-Type: application/json');
            echo json_encode($output);
        }
?>
