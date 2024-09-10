<?php 


session_start();

$_SESSION['NAME'] = 'John';

if(isset($_SESSION['name'])) {
    echo 'name:' .$_SESSION['name'];
} else {
    echo 'no name';
}
