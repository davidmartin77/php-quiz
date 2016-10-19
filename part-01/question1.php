<?php
$quiz = array(
	0=> "D"
	);
$current_question=0;
$current_score=0;
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


[[[[</php echo $quiz[0] ]]]] ?>
	</div>

	<div class="question1">
	<p> Question 1: How often do you wear flannel </p>
	<form action=result.php>
	<input type="radio" name="answer" value="A" checked> Never <br> 
	<input type="radio" name="answer" value="B" checked> Rarely <br>
	<input type="radio" name="answer" value="C" checked> Sometimes <br>
	<input type="radio" name="answer" value="D" checked> Every Day <br> 
	<input type="hidden" name="current_question value=<?php echo $current_question; ?>">
	<input type="hidden" name="current_score value=<?php echo $current_score; ?>">
	</form>
	</div>

	<div class="NextQuestion">
	 <form action="question2.php">
	 <input type="submit" value="NEXT QUESTION">
	 </form> 
	</div>
	 
</div>

</body>
</html>
