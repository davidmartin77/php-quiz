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


	<div class="question1">
		<?php echo $quiz[3] ?>
	<form action="question5.php">
	<input type="radio" name="answer" value="A" > Car <br>
	<input type="radio" name="answer" value="B" > Walking <br>
	<input type="radio" name="answer" value="C"> Longboard <br>
	<input type="radio" name="answer" value="D"> Bicycle <br>
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
