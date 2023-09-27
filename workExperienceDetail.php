<?php
function workExperience($experience) {
	$yearsOfExperience = int("years");
	$companies = string("companies");
    return workExperience;
}

$name = $_GET["name"];
$teamExperience = [
	["name" => "Amrutha Rao", "years" => 5, "companies" => "Amazon, Google, Microsoft, Apple"],
	["name" => "Josh Lohner", "years" => 4, "companies" => "Apple, Dell, HP"],
	["name" => "Nat Levesque", "years" => 4, "companies" => "Apple, HP"]
];

$workExperience = null;

foreach ($teamExperience as $member) {
	if ($member["name"] === $name) {
		$workExperience = workExperience($member["experience"]);
		break;
	}
}

if ($workExperience != null) {
	echo "<h1>Team Member: " . $name . "</h1>";
	echo "Years of Experience: " . $years . " years";
    echo "Companies Worked For: " . $companies;
} else {
	echo "Team Member not found";
}
?>
