<?php
include 'quiz.php';


$current_score = $_GET["current_score"];

if ($_GET["answer"] == $answers[1]) {
	$current_score += 1;
}

$current_question += 1; 

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

<div> Your score is <?php echo "$current_score"; ?> out of <?php echo "$current_question"; ?>

	</div> 	

	<div class="question5">
		<?php echo $quiz[0] ?>
	<form action="result.php">
	<input type="radio" name="answer" value="A"> Fashion <br>
	<input type="radio" name="answer" value="B" > Football <br>
	<input type="radio" name="answer" value="C" > Craft Beer <br>
	<input type="radio" name="answer" value="D"> Finance <br>
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
