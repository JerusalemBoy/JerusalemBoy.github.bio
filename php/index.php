<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<?php
// Function to get the number of days in a month
function getDaysInMonth($month, $year) {
    return cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

// Function to get the day of the week for the first day of the month
function getFirstDayOfMonth($month, $year) {
    return date('N', strtotime("$year-$month-01"));
}

// Function to generate the calendar
function generateCalendar($month, $year) {
    $daysInMonth = getDaysInMonth($month, $year);
    $firstDay = getFirstDayOfMonth($month, $year);
    
    $html = '<table>';
    $html .= '<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>';
    
    $html .= '<tr>';
    $dayCount = 1;
    // Fill in blank cells for days before the first day of the month
    for ($i = 1; $i < $firstDay; $i++) {
        $html .= '<td></td>';
    }
    // Fill in the days of the month
    while ($dayCount <= $daysInMonth) {
        for ($i = $firstDay; $i <= 7 && $dayCount <= $daysInMonth; $i++) {
            $html .= "<td>$dayCount</td>";
            $dayCount++;
        }
        if ($dayCount <= $daysInMonth) {
            $html .= '</tr><tr>';
        }
        $firstDay = 1;
    }
    // Fill in blank cells for remaining days of the week
    for ($i = $firstDay; $i <= 7; $i++) {
        $html .= '<td></td>';
    }
    $html .= '</tr>';
    
    $html .= '</table>';
    return $html;
}

// Example usage: generate calendar for May 2024
echo generateCalendar(5, 2024);
?>

<section class="header">
<div class="image">
<img src="a1.jpg">
<p> We are ready to welcome you in our compagny for expert consulting</p>
</div>
</section>
<p>welcome to my webpage</p>
<img src="a1.jpg">
<img src="a1.jpg">
<img src="a1.jpg">
<img src="a1.jpg">
<img src="a1.jpg">
<img src="a1.jpg">

</body>
</html>