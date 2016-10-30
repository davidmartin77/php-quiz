<?php
include 'quiz.php';

$current_score = 0;
$current_question = 0;

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
	
	<div class = "quiz questions">

		<div class="question1">
			<?php echo $quiz[0] ?>
			<form action="question2.php">
			<input type="radio" name="answer" value="A"> Never <br> 
			<input type="radio" name="answer" value="B"> Rarely <br>
			<input type="radio" name="answer" value="C"> Sometimes <br>
			<input type="radio" name="answer" value="D"> Every Day <br> 
			<input type="hidden" name = "current_question" value= "<?php echo $current_question; ?>">
			<input type="hidden" name="current_score value=<?php echo $current_score; ?>">
			</form>
		</div>
		
		<?php 
			
			$current_score = $_GET["current_score"];

			if ($_GET["answer"] == $answers[0]) {
			$current_score += 1;
			
			}

			if ($current_question =1) {
				echo $quiz[1];
			}
		?>


	</div> 

	<div class="question2">
		<?php echo $quiz[1] ?>
		<form action="question3.php">
		<input type="radio" name="answer" value="A"> Not Important <br>
		<input type="radio" name="answer" value="B" > Somewhat Important <br>
		<input type="radio" name="answer" value="C" > Very Important <br>
		<input type="radio" name="answer" value="D" > Necessary for Survival <br>
		<input type="hidden" name="current_question value"<?php echo $current_question; ?>">
		<input type="hidden" name="current_score value=<?php echo $current_score; ?>">
		</form> 
	</div>
	




