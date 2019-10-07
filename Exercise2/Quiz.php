<?php

$a1 = $_POST["q1"];
$a2 = $_POST["q2"];
$a3 = $_POST["q3"];
$a4 = $_POST["q4"];
$a5 = $_POST["q5"];

echo "What is the capital of Kansas?" . "<br>";
echo "You Answered: $a1" . "<br>";
echo "Correct Answer: Topeka" . "<br><br>";

echo "What is the capital of Mississippi?" . "<br>";
echo "You Answered: $a2" . "<br>";
echo "Correct Answer: Jackson" . "<br><br>";

echo "What is the capital of Idaho?" . "<br>";
echo "You Answered: $a3" . "<br>";
echo "Correct Answer: Boise" . "<br><br>";

echo "What is the capital of Oregon?" . "<br>";
echo "You Answered: $a4" . "<br>";
echo "Correct Answer: Salem" . "<br><br>";

echo "What is the capital of Florida?" . "<br>";
echo "You Answered: $a5" . "<br>";
echo "Correct Answer: Tallahassee" . "<br><br>";

$score = 0;

if ($a1 == "Topeka")
{
  $score = $score + 1;
}

if ($a2 == "Jackson")
{
  $score = $score + 1;
}

if ($a3 == "Boise")
{
  $score = $score + 1;
}

if ($a4 == "Salem")
{
  $score = $score + 1;
}

if ($a5 == "Tallahassee")
{
  $score = $score + 1;
}

$percent = ($score/5)*100;
echo "<br>You answered $score" . "/5 questions correctly.<br>";
echo "Your score is: " . "$percent" . "%<br>";

 ?>
