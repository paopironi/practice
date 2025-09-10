<?php
$width = 10;
$height = 5;
$area = $width * $height;
echo "The rectangle has a width of $width meters, a height of $height meters, and an area of $area square meters.";
echo "<br/>";
echo "Addition of " . $width . " and " . $height . " is: " . $width + $height;
echo "<br/>";
echo "Subtraction of " . $width . " and " . $height . " is: " . $width - $height;
echo "<br/>";
echo "Multiplication of " . $width . " and " . $height . " is: " . $width * $height;
echo "<br/>";
echo "Concatenation of " . $width . " and " . $height . " is: " . $width . $height;
echo "<br/>";
echo "<br/>";

$age = 25;

echo "Welcome to the Age Calculator!";
echo "<br/>";
echo "<br/>";
echo "Your age: $age";
echo "<br/>";
echo "You have been alive for:" . "<br/>";
echo $age * 365 . " days" . "<br/>";
echo $age * 365 * 24 . " hours" . "<br/>";
echo $age * 365 * 24 * 60 . " minutes" . "<br/>";
echo "<br/>";
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
echo "<br/>";
$temperatures = array(
    array(
        "month" => "July-Aug",
        "High" => 19,
        "Low" => 11
    ),
    array(
        "month" => "Jan-Feb",
        "High" => 7,
        "Low" => 1
    )
);
echo "Average Temperature in Edinburgh <br/>";
echo "<pre>Month      High      Low</pre>";
foreach ($temperatures as $period) {
    echo "<pre>" . $period['month'] . "   " . $period['High'] . "        " . $period['Low'] . "</pre>";
}
?>;
<br />
<?php
$grades = [
    "Aarron" => [
        "Physics" => 74,
        "English" => 69,
        "Maths" => 70
    ],
    "Jamie" => [
        "Physics" => 64,
        "English" => 79,
        "Maths" => 69
    ],
    "Harry" => [
        "Physics" => 55,
        "English" => 52,
        "Maths" => 57
    ]
];
?>
<p>
    Student results
</p>
<p>Physics result for Aarron: <?php
                                echo $grades['Aarron']['Physics'];
                                ?></p>
<p>Englis result for Jamie: <?php
                            echo $grades['Jamie']['English'];
                            ?></p>
<p>Maths result for Harry: <?php
                            echo $grades['Harry']['Maths'];
                            ?></p>
<br>
<p>Average Temperature in Edinburgh</p>
<table style="text-align: left;">
    <thead>
        <tr>
            <th style="width: 150px;">Month</th>
            <th style="width: 150px;">High</th>
            <th style="width: 150px;">Low</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php
                echo $temperatures[0]['month'];
                ?></td>
            <td><?php
                echo $temperatures[0]['High'];
                ?></td>
            <td><?php
                echo $temperatures[0]['Low'];
                ?></td>
        </tr>
        <tr>
            <td><?php
                echo $temperatures[1]['month'];
                ?></td>
            <td><?php
                echo $temperatures[1]['High'];
                ?></td>
            <td><?php
                echo $temperatures[1]['Low'];
                ?></td>
        </tr>
    </tbody>
</table>