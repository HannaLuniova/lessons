<?php

$days =
    [
        "Monday" => "Понедельник",
        "Tuesday" => "Вторник",
        "Wednesday" => "Среда",
        "Thursday" => "Четверг",
        "Friday" => "Пятница",
        "Saturday" => "Суббота",
        "Sunday" => "Воскресенье"
    ];

$date = date("l");
$current = $days[$date];

echo $current;
