<?php

/*
Here we get the GET-Values from the request. Lets say your request is just a link from a simple URL link or a get request to Protopie Connect like this (including the right folder with your studentid):

https://p672107.mittwaldserver.info/YOURSTUDENTID/index.php?time=500&scores=15

Then you can use the $_GET array to handle this data link this. 
Here we store the data into 2 variables time an scores. 
*/

$time = $_GET['time'];
$scores = $_GET['scores'];


// here Open the text file in append mode (we add new lines on every request)
// the file must exist in the same folder
$file = fopen("data.txt", "a");

// Write the values to the file in a new line and use , to seperate
fwrite($file, "Time: $time, Scores: $scores\n");

// Close the file
fclose($file);

// if everything works, we see a "done"
echo "Thank you tester  your are great really !";
?>