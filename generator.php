<?php

print_r($_POST);
print_r($_REQUEST);

if ($_POST['defaults'] !== null) {
    echo $_POST['defaults'];
}