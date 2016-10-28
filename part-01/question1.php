<?php
include 'quiz.php';

$current_score = 0;
$current_question = 0;
//if ($GET_["answer"] == $answers[0]) {
//	$current_score += 1;
//}

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

	<div class="question1">
	<?php echo $quiz[0] ?>
	<form action="question2.php">
	<input type="radio" name="answer" value="A"> Never <br> 
	<input type="radio" name="answer" value="B"> Rarely <br>
	<input type="radio" name="answer" value="C"> Sometimes <br>
	<input type="radio" name="answer" value="D"> Every Day <br> 
	<input type="hidden" name="current_question" value = "<?php echo $current_question; ?>">
	<input type="hidden" name="current_score" value= "<?php echo "$current_score; ?>">
	
	 <input type="submit" value="NEXT QUESTION">
	 </form> 
	</div>
	 

</body>
</html>
