<?php 
	include 'dbcon.php';
	session_start(); 
	//Set Question Number
	

	//Query for the Question
	$query = "SELECT * FROM dbmsquestion";
	// Get the question
	$result = mysqli_query($con,$query);
	$question = mysqli_fetch_array($result); 

	// //Get Choices
	if (isset($_GET['id'])) 
	{
		$id=$_GET['id'];
	$query = "SELECT * FROM dbmsoption WHERE $id='id' ";
	$choices = mysqli_query($con,$query);
    }
	// Get Total questions
	$query = "SELECT * FROM dbmsquestion";
	$total_questions = mysqli_num_rows(mysqli_query($con,$query));
 	
	
?>
<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
	<main>
			<div class="container">
				<div class="current">Question <?php echo $question['question_number']  ?> of 
				 <?php echo $total_questions; ?></div>
			</div>
			<div class="card bg-light">
				<p class="question">
					<?php echo $question['question_text']; ?> 
				</p>
				<div class="card-body">
					
				</div>
			</div>
				
	</main>
</body>
</html>