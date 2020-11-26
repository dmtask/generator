<?php

//print_r($_POST);

if (!empty($_POST['length']) && !empty($_POST['chars']) && !empty($_POST['numbers']) && !empty($_POST['specialChars'])) {
    $length = htmlspecialchars($_POST['length']);
    $chars = htmlspecialchars($_POST['chars']);
    $numbers = htmlspecialchars($_POST['numbers']);
    $specialChars = htmlspecialchars($_POST['specialChars']);

    echo generatePws($length, $chars, $numbers, $specialChars);
}

function generatePws($length, $chars, $numbers, $specialChars) {


    return '';
}