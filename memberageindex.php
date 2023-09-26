<?php
function age($dateOfBirth) {
    $currentDate = date("Y-m-d");
    $age = date_diff(date_create($currentDate), date_create($dateOfBirth))->y;
    return $age;
}

$teamAge = [
    ["name" => "Amrutha Rao", "dateOfBirth" => "2002-05-01"],
    ["name" => "Josh Lohner", "dateOfBirth" => "2001-08-09"],
    ["name" => "Nat Levesque", "dateOfBirth" => "1998-01-30"]
];

foreach ($teamAge as $member) {
    echo "<a href='detail.php?name=" . urlencode($member["name"]) . "'>";
    echo "Name: " . $member["name"] . "<br>";
    echo "Age: " . age($member["dateOfBirth"]) . "<br>";
    echo "</a><br>";
}
?>



