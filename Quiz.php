<?php
$day = $_POST["day"];
$vacation = $_POST["vacation"];
$color = $_POST["color"];
$major = $_POST["major"];
$food = $_POST["food"];

echo "Question 1: Which day you like best?<br>";
echo "  You answered: " . $day . "<br>";
echo " Correct answer: Wedesday <br><br>";
echo "Question 2: Where are you going to spend your vacation?<br>";
echo "  You answered: " . $vacation . "<br>";
echo "  Correct answer: Seattle <br><br>";
echo "Question 3: What color you like?<br>";
echo "  You answered: " . $color . "<br>";
echo "  Correct answer: Blue <br><br>";
echo "Question 4: What is your major?<br>";
echo "  You answered: " . $major . "<br>";
echo "  Correct answer: Computer Science <br><br>";
echo "Question 5: what food do you want to eat tonight?<br>";
echo "  You answered: " . $food . "<br>";
echo "  Correct answer: Sushi <br><br>";
$score = 0;
if($day == "Wedesday") $score += 20;
if($vacation == "Seattle") $score += 20;
if($color == "Blue") $score += 20;
if($major == "Computer Science") $score += 20;
if($food == "Sushi") $score += 20;
echo "<h2>You had: " . $score/20 . " correct!</h2>"; 
echo "<h2>Your score: </h2><h1>{$score}%</h1>";
?>