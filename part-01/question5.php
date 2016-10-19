<?php
include 'quiz.php'

$current_score= $_GET["current_score"];

if ($GET_["answer"]) == $answers[4] {
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

	<div class="question5">
	<p> Question 5: What is your favorite conversation topic? </p>
	<form action=result.php>
	<input type="radio" name="answer" value="A" checked> Fashion <br>
	<input type="radio" name="answer" value="B" checked> Football <br>
	<input type="radio" name="answer" value="C" checked> Craft Beer <br>
	<input type="radio" name="answer" value="D" checked> Finance <br>
	<input type="hidden" name="current_question value=<?php echo $current_question; ?>">
	<input type="hidden" name="current_score value=<?php echo $current_score; ?>">
	</form>	
	</div>

	<div class="NextQuestion">
	 <form action="finalscore.php">
	 <input type="submit" value="RESULTS">
	 </form> 
	</div>


</body>
</html>
