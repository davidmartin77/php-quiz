<?php
include 'quiz.php'

$current_score= $_GET["current_score"];

if ($GET_["answer"]) == $answers[3] {
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

<div> Your current score is <?php echo $current_score ?> out of <?php echo $current_question ?> </div>

	<div class="question1">
	<p> Question 4: What is your favorite mode of transportation </p>
	<form action=result.php>
	<input type="radio" name="answer" value="A" checked> Car <br>
	<input type="radio" name="answer" value="B" checked> Walking <br>
	<input type="radio" name="answer" value="C" checked> Longboard <br>
	<input type="radio" name="answer" value="D" checked> Bicycle <br>
	<input type="hidden" name="current_question value=<?php echo $current_question; ?>">
	<input type="hidden" name="current_score value=<?php echo $current_score; ?>">
	</form>
	</div>

	<div class="NextQuestion">
	 <form action="result.php">
	 <input type="submit" value="Results">
	 </form> 
	</div>

</body>
</html>
