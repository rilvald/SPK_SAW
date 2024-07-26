<?php
session_start();

if (empty($_SESSION['user']) && empty($_SESSION['role'])) {
    include 'login.php';
} else {
    $role = $_SESSION['role'];
    
    if ($role === 'adminpsa') {
        include 'admin.php';
    } elseif ($role === 'adminpba') {
        include 'adminpba.php';
    } else {
        echo "Role tidak dikenal atau tidak diizinkan.";
    }
}

