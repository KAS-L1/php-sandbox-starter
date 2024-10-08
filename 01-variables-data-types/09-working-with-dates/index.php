<?php
$output = null;

/*
'Y' - The year
'm' - The month
'd' - The day
'D' - The day of the week short name
'l' - The full day of the week name
'h' - The hour
'i' - The minute
's' - The second
'a' - AM/PM
*/

// Get year 
$output = date('Y');

// Get year with timestamp
$output = date('Y', 9365654);

// Get year timestamp from srttotime()
$output = date('Y', strtotime('1999-09-01'));

// Get month
$output = date('m');

// Get day
$output = date('D');
$output = date('L');

// Get month, day, year
$output = date('Y - m - d');

// Get hour
$output = date('h');

// Get min
$output = date('i');

// Get second 
$output = date('s');

// Get am/pm
$output = date('a');

// Put It all together 
$output = date('Y-m-d h:i:s a');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>