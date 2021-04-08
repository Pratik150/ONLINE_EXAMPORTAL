<?php 
include("navbar.php");
?>
<br><br><br><br>
<section>
	<div class="container-fluid">
		<div class="container">
			<div class="card">
				<?php
                 include("dbcon.php");
                 $query="SELECT * FROM newquiz";
                 $data=mysqli_query($con,$query);
                  while($result=mysqli_fetch_array($data))
                  {

				?>
				<h2 class="text-dark text-center"><?php echo $result['question']?></h2>
				<?php
                   }
				?>
				<?php
                 include("dbcon.php");
                 $query="SELECT * FROM newquiz";
                 $data=mysqli_query($con,$query);
                  while($result=mysqli_fetch_array($data))
                  {

				?>
				<div class="card-body">
					<input type="checkbox" name="option1[]" id="option1" value="<?php echo $result['answer']?>" class="radoptions">
					<input type="checkbox" name="option2[]" id="option1" value="<?php echo $result['answer']?>" class="radoptions">
					<input type="checkbox" name="option3[]" id="option1" value="<?php echo $result['answer']?>" class="radoptions">
					<input type="checkbox" name="option4[]" id="option1" value="<?php echo $result['answer']?>" class="radoptions">
				</div>
			<?php
                   }
				?>
			</div>

		</div>
	</div>
</section>
