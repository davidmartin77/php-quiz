<?php

	include 'quiz.php'

	$current_score = $_GET["current_score"]

if ($_GET["answer"] == $answers[$_GET["current_question"]]) {
	$current_score +=1
	}

	echo $current_score
?>	

<!DOCTYPE html>
<html>
<head>
</head>

<body>

<div> You've finished the quiz. Your score is <?php echo $current_score ?> out of 4 </div>

</body>
</html>

