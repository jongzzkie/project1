<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU BAR</title>
</head>
<body>

<?php
  function day_of_week($day_number) {
    $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    
    if ($day_number >= 1 && $day_number <= 7) {
        return $days[$day_number - 1];
    } else {
        return "Invalid day number. Please enter a number between 1 and 7.";
    }
}
?>

</body>
</html>