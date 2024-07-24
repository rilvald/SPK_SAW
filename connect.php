<?php
$konek=new mysqli('localhost','root','','spk_saw');
if ($konek->connect_errno){
    "Database Error".$konek->connect_error;
}
?>