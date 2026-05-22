<?php

$developer = [
    "name" => "John Doe",
    "age" => 30,
    "skills" => ["PHP", "JavaScript", "HTML", "CSS"],
    "experience" => 5
];
echo "Name: " . $developer["name"] . "\n";
echo "Age: " . $developer["age"] . "\n";
echo "Skills: " . implode(", ", $developer["skills"]) . "\n";
echo "Experience: " . $developer["experience"] . " years\n";
?>