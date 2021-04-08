<?php 
include("navbar.php");
include("dbcon.php");
?>
<br><br>
<section>
  <div class="container-fluid">
    <div class="container">
      <form method="POST" action="">
        <div class="form-group">
          <label>Question : </label>
          <input type="text" name="question" class="form-control">
        </div>

        <div class="form-group">
          <label>Option 1 : </label>
          <input type="text" name="option1" class="form-control">
        </div>

        <div class="form-group">
          <label>Option 2 : </label>
          <input type="text" name="option2" class="form-control">
        </div>

        <div class="form-group">
          <label>option 3 : </label>
          <input type="text" name="option3" class="form-control">
        </div>

        <div class="form-group">
          <label>Correct Answer : </label>
          <input type="text" name="answer" class="form-control">
        </div>

        <button class="btn btn-success" type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
  
</section>
<?php
include("dbcon.php");
if (isset($_POST['submit'])) 
{
  $question=$_POST['question'];
  $option1=$_POST['option1'];
  $option2=$_POST['option2'];
  $option3=$_POST['option3'];
  $answer=$_POST['answer'];
  $query="INSERT INTO newquiz(question,option1,option2,option3,answer)VALUES('$question','$option1','$option2','$option3','$answer')";
  $data=mysqli_query($con,$query);
   
  
}


?>