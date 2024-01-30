<?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $firstname = $_POST['firstname'] ;
            $lastname = $_POST['lastname'] ;
            $phone = $_POST['phone'] ;
             
            $output = ['firstname' => $firstname,
            'lastname' => $lastname,
            'phone' => $phone];
            header('Content-Type: application/json');
            echo json_encode($output);
        }
?>