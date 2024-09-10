<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=Johnbx

// var_dump($_GET);

// echo isset($_GET['name']) ? $_GET['name'] : '';
echo htmlspecialchars($_GET['name']) ?? ''; 