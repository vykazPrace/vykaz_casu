<?php

function unauth_header() { # pouze presmerovani
    header("Location: ../index.php");
    die();
}

function check_user() { # kontrola uzivatele
    if ( isset($_SESSION['prihlaseny'])) {

        include "prihlaseniedodatabazi.php";
        $meno = $_SESSION['prihlaseny'];
        $select = mysqli_query($con, "SELECT meno FROM uzivatelia WHERE meno='$meno'") or die (mysql_error());

        if (mysqli_num_rows($select)!=1) { unauth_header(); }
    } else {
        unauth_header();
    }
}

