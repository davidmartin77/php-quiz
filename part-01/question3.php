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
		<?php echo $quiz[2] ?>
	<form action="question4.php">
	<input type="radio" name="answer" value="A"> Critical <br>
	<input type="radio" name="answer" value="B"> Somewhat Important <br>
	<input type="radio" name="answer" value="C"> Meh <br>
	<input type="radio" name="answer" value="D" > Not Important <br>
	<input type="hidden" name="current_question value=<?php echo "$current_question;" ?>>
	
	<input type="hidden" name="current_score value=<?php echo "$current_score"; ?>>
	</form>
	</div>
	

	<div class= "NextQuestion">
	 <form action="question4.php">
	 <input type="submit" value="NEXT QUESTION">
	 </form> 
	</div>

</body>
</html>
