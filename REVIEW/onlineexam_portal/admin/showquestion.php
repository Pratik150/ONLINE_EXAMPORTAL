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

    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<br><br>
<div class="container-fluid">
	<div class="container bg-light">

        <!-- <display question no. start> -->        
		<!-- <div class="row">
			<div class="col-lg-2 col-lg-push-10 bg-info">
				<div id="current_que" style="float: left"><h2>0</h2></div>
				<div style="float: left"><h2>/</h2></div>
				<div id="total_que" style="float: left"><h2>0</h2></div>
            </div> -->
           <br><br>
           <!-- <display question no. ends> -->
        <?php
        include("dbcon.php");
         $query="SELECT * FROM questions";
         $data=mysqli_query($con,$query);
         while ($result= mysqli_fetch_array($data)){

         	
        ?>
            <!-- <question pannel start> -->
            <div class="card bg-light container" id="load_question">
            	<h5 class="card-header"><?php echo $result['question']?></h5>
            	<div class="card-body bg-light">
            		<input type="radio" name="" value="<?php echo $result['opt1']['opt2']['opt3']['opt4'];?>">
                 		<?php echo $result['answer'];?>
            	</div>
            	<br>
            </div>
            <!-- <question pannel ends> -->
<?php
}
?>
           <!-- next -previous Buttons -->
		    <div class="">
			   <button class="btn btn-warning" type="button" value="previous" onclick="load_previous();">Previous</button>

			  <button class="btn btn-success" type="button" value="next" onclick="load_next();">Next</button>
		    </div>
           <!-- <next previous button ends> -->		
	</div>
 </div>
 <script type="text/javascript">
 	function load_total_que()
 	{
 		var xmlhttp=new XMLHttpRequest();
 		xmlhttp.onreadystatechange=function()
 		{
 			if(xmlhttp.readystate == 4 && xmlhttp.status == 200)
 			{
              document.getElementsById("total_que").innerHTML=xmlhttp.responseText;
 			}
 		};
 		xmlhttp.open("GET","forajax/load_total_que.php",true);
 		xmlhttp.send(null);
 	}
 </script>
</body>
</html>
