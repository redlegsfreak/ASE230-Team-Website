<?php
function Age($dateOfBirth) {
    $currentDate = date("Y-m-d");
    $birthDate = date_create($dateOfBirth);
    $diff = date_diff(date_create($currentDate), $birthDate);
    return $diff->y;
}

$name = $_GET["name"];
$teamAge = [
    ["name" => "Amrutha Rao", "dateOfBirth" => "2002-05-01"],
    ["name" => "Josh Lohner", "dateOfBirth" => "2001-08-09"],
    ["name" => "Nat Levesque", "dateOfBirth" => "1998-01-30"]
];

$age = null;

foreach ($teamAge as $member) {
    if ($member["name"] === $name) {
        $age = Age($member["dateOfBirth"]);
        break;
    }
}

if ($age !== null) {
    echo "<h1>Team Member: " . $name . "</h1>";
    echo "Age: " . $age . " years";
} else {
    echo "Team member not found.";
}
?>

