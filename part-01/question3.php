<?php
include 'quiz.php'

$current_score= $_GET["current_score"];

if ($GET_["answer"]) == $answers[2] {
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

	<hr> </hr>

<div> Your current score is <?php echo $current_score ?> out of <?php echo $current_question ?> </div>

	<div class="question1">
	<p> Question 3: How Important is Brooklyn to your worldview </p>
	<form action=result.php>
	<input type="radio" name="answer" value="A" checked> Critical <br>
	<input type="radio" name="answer" value="B" checked> Somewhat Important <br>
	<input type="radio" name="answer" value="C" checked> Meh <br>
	<input type="radio" name="answer" value="D" checked> Not Important <br>
	<input type="hidden" name="current_question value=<?php echo $current_question; ?>">
	<input type="hidden" name="current_score value=<?php echo $current_score; ?>">
	</form>
	</div>

	<div class="NextQuestion">
	 <form action="question4.php">
	 <input type="submit" value="NEXT QUESTION">
	 </form> 
	</div>

</body>
</html>
