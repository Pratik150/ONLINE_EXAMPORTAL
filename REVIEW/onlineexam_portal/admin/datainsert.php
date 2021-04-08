<?php  include 'dbcon.php';
if(isset($_POST['submit'])){
  $question_number = $_POST['question_number'];
  $question_text = $_POST['question_text'];
  $correct_choice = $_POST['correct_choice'];
  // Choice Array
  $choice = array();
  $choice[1] = $_POST['choice1'];
  $choice[2] = $_POST['choice2'];
  $choice[3] = $_POST['choice3'];
  $choice[4] = $_POST['choice4'];
 
 // First Query for Questions Table

  $query = "INSERT INTO dbmsquestion (";
  $query .= "question_number, question_text )";
  $query .= "VALUES (";
  $query .= " '{$question_number}','{$question_text}' ";
  $query .= ")";

  $result = mysqli_query($con,$query);
  
  //Validate First Query
  if($result){
    foreach($choice as $option => $value){
      if($value != ""){
        if($correct_choice == $option){
          $is_correct = 1;
        }else{
          $is_correct = 0;
        }
      


        //Second Query for Choices Table
        $query = "INSERT INTO dbmsoption (";
        $query .= "question_number,is_correct,coption)";
        $query .= " VALUES (";
        $query .=  "'{$question_number}','{$is_correct}','{$value}' ";
        $query .= ")";

        $insert_row = mysqli_query($con,$query);
        // Validate Insertion of Choices

        if($insert_row){
          continue;
        }else{
          die("2nd Query for Choices could not be executed" . $query);
          
        }

      }
    }
    $message = "Question has been added successfully";
  }

  




}

    $query = "SELECT * FROM dbmsquestion";
    $questions = mysqli_query($con,$query);
    $total = mysqli_num_rows($questions);
    $next = $total+1;
    

?>