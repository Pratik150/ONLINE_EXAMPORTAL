<?php
include("dbcon.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
     <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
             <h3>Welcome To Quiz</h3>
             <h4>Time Remain :</h4>
             <div class="rounded bg-warning"><?php include ("timer.php");?></div>
             
          </div>
       </nav>
<div class="container-fluid">
	<div class="container col-lg-8 m-auto d-block">
		<br>
		<div class="card">
			<form method="POST" action="check.php">
			<h4 class="text-center text-primary">Welcome Pratik Verma</h4>
			<div class="card-body">
				<?php
				for ($i=1; $i < 10; $i++) 
                { 
					
                 include("dbcon.php");
                 $data="SELECT * FROM question WHERE qid='$i'";
                 $query=mysqli_query($con,$data);
                 while($result=mysqli_fetch_array($query)){
                 	?>


                 	<h5 class="card-header"><?php echo $result['questions']?></h5>


                   <?php
                 include("dbcon.php");
                 $data="SELECT * FROM answer WHERE 	ans_id='$i'";
                 $query=mysqli_query($con,$data);
                 while($result=mysqli_fetch_array($query)){
                 	?>
                 	<div class="card-body">
                 		<input type="radio" name="quizcheck[<?php echo ($result ['ans_id'])?>]" value="<?php echo $result['aid'];?>">
                 		<?php echo $result['answer'];?>
                 	</div>
  

                     <?php
                 }
             }
         } 
                ?>
                 <button class="btn btn-warning" name="submit" type="submit">Submit</button>
            </form>
			</div>
		</div>
	</div>
</div>
</body>
</html>