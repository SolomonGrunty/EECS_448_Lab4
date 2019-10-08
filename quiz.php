<?php
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	$q4 = $_POST["q4"];
	$q5 = $_POST["q5"];
	$score = 5;
	if ($q1 != "Jam")
		$score--;
	if ($q2 != "World")
		$score--;
	if ($q3 != "Wonder")
		$score--;
	if ($q4 != "America")
		$score--;
	if ($q5 != "Best")
		$score--;
	$finalScore = ($score/5)*100;
	echo "<p>Question 1: Come on and slam, and welcome to the ___.<br>You answered: $q1<br>Correct answer: Jam<br>Question 2: Somebody once told me the _____ was gonna roll me.<br>You answered: $q2<br>Correct answer: World<br>Question 3: And after ~aaaaaaalllllll~, you're my ______wall.<br>You answered: $q3<br>Correct answer: Wonder<br>Question 4: This is _______. Don't catch you slippin' now.<br>You answered: $q4<br>Correct answer: America<br>Question 5: I wanna be the very ____, like no one ever was.<br>You answered: $q5<br>Correct answer: Best<br>You answered $score correct, for a total score of $finalScore %</p>";
