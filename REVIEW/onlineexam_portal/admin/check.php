<?php
include("dbcon.php");
if (isset($_POST['submit'])) 
{
	if(!empty($_POST['quizcheck']))
	{
     $count=count($_POST['quizcheck']);
     echo "you have attempted " .$count. "Questions Out of 5 Questions";
      echo "<br>";
      $results='0';
     $i='1';
     $selected=$_POST['quizcheck'];
     // print_r($selected);

     $data="SELECT * FROM  question";
     $query=mysqli_query($con,$data);
     while($result=mysqli_fetch_array($query))
     {
     	$checked=$result['ans_id'] == $selected[$i];

     	if($checked)
     	{
          $results++;
     	}

     	$i++;
     }
      
      echo "<br> YOUR TOTAL SCORE IS : ".$results;
	}
}

?>