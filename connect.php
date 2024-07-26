<?php
    $konek=new mysqli('localhost','root','','spk_saw');
    if ($konek->connect_errno){
        die("Database Error: " . $konek->connect_error);
    }
