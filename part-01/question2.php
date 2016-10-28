<?php
include 'quiz.php';

$current_score = $_GET["current_score"];

if ($GET_["answer"] == $answers[1]) {
	$current_score += 1;

}

?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>

	<div class="question-count">

			<?php 
			count($quiz);
			?>
	</div>

<div> Your score is <?php echo $current_score ?> out of <?php echo $current_question ?>

	</div> 

<div class="question2">
	<p> Question 2: How important is Kombucha to your diet </p>
	<form action=result.php>
	<input type="radio" name="answer" value="A" checked> Not Important <br>
	<input type="radio" name="answer" value="B" checked> Somewhat Important <br>
	<input type="radio" name="answer" value="C" checked> Very Important <br>
	<input type="radio" name="answer" value="D" checked> Necessary for Survival <br>
	<input type="hidden" name="current_question value=<?php echo $current_question; ?>">
	<input type="hidden" name="current_score value=<?php echo $current_score; ?>">
	</form> 
	</div>

	<div class="NextQuestion">
	 <form action="question3.php">
	 <input type="submit" value="NEXT QUESTION">
	 </form> 
	</div>
	
</div>