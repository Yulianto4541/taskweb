<?php

$html = file_get_contents('https://www.holiday-weather.com/new_york_city/averages/');

// print_r($html);
$rainPattern = '/id="precipitation_rain_mms_values"\s*name="_rain_mms_values"\s*value="\[([^\]]+)\]"/';
$temperaturePattern = '/id="temperature_c_values"\s*name="values"\s*value="\[([^\]]+)\]"/';
$categoriesPattern = '/"categories":\[(.*?)\]/';

if (preg_match($categoriesPattern, $html, $matches)) {

    $categoriesValues = explode(',', $matches[1]);
}

if (preg_match($rainPattern, $html, $matches)) {
    $rainValues = explode(',', $matches[1]);
}


if (preg_match($temperaturePattern, $html, $matches)) {
    $temperatureValues = explode(',', $matches[1]);
}

$data = array_map(null, $categoriesValues, $rainValues, $temperatureValues);

// $data = [
//     ["Jan", 85, 2],
//     ["Feb", 57, 2],
//     ["Mar", 90, 4],
//     ["Apr", 96, 11],
//     ["May", 114, 16],
//     ["Jun", 98, 22],
//     ["Jul", 101, 25],
//     ["Aug", 87, 24],
//     ["Sep", 104, 20],
//     ["Oct", 94, 14],
//     ["Nov", 69, 9],
//     ["Dec", 85, 9]
// ];

?>
<div class="task-4">
    <h1>Task #4</h1>
    <div class="weather">
        <?php
        foreach ($data as $item) {
            $month = str_replace('"', '', $item[0]);
            $rain = $item[1];
            $temp = $item[2];
            $active = (date('M') == $month) ? 'active' : '';

            echo "<div class='weather-item $active'>";
            echo "<h3>$month</h3>";
            echo "<h2>$temp C</h2>";
            echo "<h5>Avg. Rain: $rain mm</h5>";
            echo '</div>';
        }
        ?>
    </div>
</div>