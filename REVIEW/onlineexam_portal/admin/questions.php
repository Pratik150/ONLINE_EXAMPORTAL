<?php 
include("navbar.php");

?>
<br><br>
<section>
  <div class="container-fluid">
    <div class="container">
      <form action="" class="was-validated" method="POST">


   <div class="form-group">
    <label for="uname">Question No:</label>
    <input type="number"  id="uname" placeholder="Enter question_no" name="question_no" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
   
   
  <div class="form-group">
    <label for="uname">Question:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="question" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="pwd">Option 1:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="opt1" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="pwd">Option 2:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="opt2" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="pwd">Option 3:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="opt3" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="pwd">Option 4:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="opt4" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="pwd">Correct Answer:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="answer" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<!-- insert tag -->
<?php 
include("dbcon.php");
if (isset($_POST['submit'])) 
{
 $question_no=$_POST['question_no'];
 $question=$_POST['question'];
 $opt1=$_POST['opt1'];
 $opt2=$_POST['opt2'];
 $opt3=$_POST['opt3'];
 $opt4=$_POST['opt4'];
 $answer=$_POST['answer'];
 $query="INSERT INTO questions(question_no,question,opt1,opt2,opt3,opt4,answer)VALUES('$question_no','$question','$opt1','$opt2','$opt3','$opt4','$answer')";
 $data=mysqli_query($con,$query);
}
?>
<script type="text/javascript">
  alert("question Added Successfully");
 
</script>
<?php

?>
<!-- <insert tag ends> -->
    </div>
  </div>
  
</section>