<?php
include("navbar.php");
?>
<br><br><br>
<?php
include("dbcon.php");
 $query = "SELECT * FROM dbmsquestion";
    $questions = mysqli_query($con,$query);
    $total = mysqli_num_rows($questions);
    $next = $total+1;
?>
<section>
	<div class="container-fluid">
		<div class="container">
			<form action="datainsert.php" method="POST">
				<label>Question No.</label>
				<input type="number" name="question_number" value="<?php echo $next; ?>" required="">
                 <br>
				<label>Question</label>
				<input type="" name="question_text" required="" class="form-control">

				<label>Option 1 </label>
				<input type="" name="choice1" required="" class="form-control">

				<label>Option 2</label>
				<input type="" name="choice2" required="" class="form-control">

				<label>Option 3</label>
				<input type="" name="choice3" required="" class="form-control">

				 <label>Option 4</label>
				<input type="" name="choice4" required="" class="form-control">
               <br>
				<label>Correct Option</label>
				<input type="number" name="correct_choice">
                <br>
                <br>
				<button class="btn btn-success" type="submit" name="submit" value="submit">Submit</button>
			</form>
		</div>
	</div>
</section>
