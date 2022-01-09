<?php
//getting the time and converting minutes and hours to seconds
$second = date("s");
$minute = (date("i") * 60) + $second;
$hour = (date("h") * 3600) + $minute;
$content = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500" height="500" viewBox="0 0 100 100">

<!-- watchface with 12,3,6,9 hour steps -->
<circle cx="50" cy="50" r="49" stroke="black" stroke-width="2" fill="gainsboro" />
<path d="M 50 5 V 10 M 95 50 H 90 M 50 95 V 90 M 5 50 H 10" stroke="black" stroke-width="1" stroke-linecap="round"></path>

<!-- hour clock hand -->
<line x1="50" y1="25" x2="50" y2="50" stroke="black" stroke-width="3" stroke-linecap="round" transform="rotate(' . 360*($hour/43200) . ',50,50)"></line>
<!-- minute clock hand -->
<line x1="50" y1="15" x2="50" y2="50" stroke="blue" stroke-width="2" stroke-linecap="round" transform="rotate(' . 360*($minute/3600) . ',50,50)"></line>
<circle cx="50" cy="50" r="3" stroke="blue" stroke-width="2" fill="blue"></circle>
<!-- second clock hand -->
<line x1="50" y1="5" x2="50" y2="60" stroke="red" stroke-width="1" stroke-linecap="round" transform="rotate(' . 360*($second/60) . ',50,50)"></line>
<circle cx="50" cy="50" r="1.5" stroke="red" stroke-width="2" fill="red"></circle>

</svg>';
//saving clock as .svg and checking if writing to a file was successful
$save = file_put_contents("hodiny.svg", $content);
echo($save === FALSE ? "Failed saving file" : "File saved successfully");