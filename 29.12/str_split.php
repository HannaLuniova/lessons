<?php

// $numbers = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять",];

foreach (str_split($_POST["q1"]) as  $value) {
    echo " " . ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять",][$value];
}