<?php 

// Existing arrays
$list = array("id" => 1, "name" => "Ali", "age" => 25);
$countries = ["Australia", "Pakistan", "India", "USA"]; 

// Output with line breaks for CLI
// echo $list["name"] . "\n"; // Outputs the name from the $list array
// echo $countries[2] . "\n"; // Outputs the third element in the $countries array

// Count the number of elements in the $countries array
// echo count($countries) . "\n"; // Outputs the total number of elements in the $countries array

// Advanced Array Functions

// Associative array with mixed keys and values
$people = [
    "Ali" => ["age" => 25, "city" => "Karachi"],
    "Sara" => ["age" => 30, "city" => "Lahore"],
    "John" => ["age" => 28, "city" => "New York"]
];

// Print the associative array with formatting
echo "People:\n";
foreach ($people as $name => $info) {
    echo "$name is " . $info["age"] . " years old and lives in " . $info["city"] . ".\n";
}

// Adding a new element to the array
$people["Anna"] = ["age" => 22, "city" => "Sydney"];
echo "\nAdded Anna:\n";
foreach ($people as $name => $info) {
    echo "$name is " . $info["age"] . " years old and lives in " . $info["city"] . ".\n";
}

// Merging arrays
$moreCountries = ["Canada", "Brazil", "Mexico"];
$allCountries = array_merge($countries, $moreCountries);
echo "\nAll Countries:\n";
foreach ($allCountries as $country) {
    echo "$country\n";
}

// Array slicing
$topCountries = array_slice($allCountries, 0, 3); // Get the first 3 elements
echo "\nTop Countries:\n";
foreach ($topCountries as $country) {
    echo "$country\n";
}

// Sorting arrays
sort($allCountries); // Sort array in ascending order
echo "\nSorted Countries:\n";
foreach ($allCountries as $country) {
    echo "$country\n";
}

// Associative array sorting by value
asort($people); // Sort by values, maintaining key-value association
echo "\nSorted People by Age:\n";
foreach ($people as $name => $info) {
    echo "$name is " . $info["age"] . " years old and lives in " . $info["city"] . ".\n";
}


