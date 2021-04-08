
<?php
session_start();
?>
<?php  
include("header.php");
include("dbcon.php");
if (isset($_GET['id'])) 
{
	$id=$_GET['id'];
	$data="SELECT image FROM user WHERE id='$id'";
	$query=mysqli_query($con,$data);
	$result=mysqli_fetch_array($query);
}
?>
<style type="text/css">
	h4 
	{
		font-family: 'Zilla Slab', serif;
	}
	h3{
		font-family: 'Zilla Slab', serif;
	}
</style>
<section >
	<div class="container-fluid">
		<div class="container">
			<h5 class="text-primary text-center">Welcome To Student Dashboard</h5>			
			<h3 class="text-center text-primary">hi,<?php echo $_SESSION['name']?></h3>
		</div>
	</div>
</section>
<br>

<!-- <pdf section download start> -->
<section class="bg-light">
	<div class="container-fluid">
		<div class="container">
			<div class="text-success">
			<h4>Important Notes : </h4>
		   </div>
		   <br>
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<img src="https://images.shiksha.com/mediadata/images/articles/1582804864phpq24JjK.jpeg">
						<div class="card-body text-center text-success">
							<h3>GATE CSE/IT</h3>
							<p>syllabus</p>
							<a href="http://localhost/onlineexam_portal/pdf/cs.pdf" target="_pratik" class="btn btn-success">Download syllabus</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="card">
						<img src="https://d8it4huxumps7.cloudfront.net/bites/wp-content/banners/2020/12/5fed86eb5fe1c_academic_session_2021-2022_will_see_the_introduction_of_a_common_aptitude_test_for_colleges_like_du,_jnu.png?d=700x400">
						<div class="card-body text-center text-success">
							<h3>APTITUDE TEST</h3>
							<p>Important Notes. </p>
							<a href="http://localhost/onlineexam_portal/pdf/aptitude.pdf" target="_pratik" class="btn btn-success">Download Notes</a>
							
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="card">
						<img src="https://www.cambridge.org/af/files/9715/5057/0210/Quiz_your_english_app_logo.png">
						<div class="card-body text-center text-success">
							<h3>Genral English</h3>
							<p>Important Notes. </p>

							<a href="http://localhost/onlineexam_portal/pdf/english.pdf" target="_pratik" class="btn btn-success">Download Notes</a>
						</div>
					</div>
				</div>
                 
                 <div class="col-md-3">
					<div class="card">
						<img src="https://leverageedu.com/blog/wp-content/uploads/2020/02/Non-Verbal-Reasoning.png">
						<div class="card-body text-center text-success">
							<h4>Reasoning</h4>
							
							<a href="http://localhost/onlineexam_portal/pdf/Reasoning.pdf" target="_pratik" class="btn btn-success">Download Notes</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
</section>
<!-- <pdf section download ends> -->
<br>

<!-- <slider start> -->
<section>
	<div class="container">
		
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://blog.pcmbtoday.com/wp-content/uploads/2019/08/16.jpg" alt="First slide" height="450px"  >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://cdn2.geckoandfly.com/wp-content/uploads/2014/02/bill-gates-quotes.jpg" alt="Second slide" height="450px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://kuldeepgupta.weebly.com/uploads/2/9/9/0/29901141/1400672842.png" alt="Third slide" height="450px" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>

	</div>
</section>
<!-- <slider ends> -->

<br><br><br>

<!-- <youtube links start> -->
<section class="bg-light">
	<div class="container-fluid">
		<div class="container">
			<div class="text-success">
			<h4>Toppers Advice : </h4>
		   </div>
		   <br>
			<div class="row">
				<div class="col-md-4">
					<div class="card bg-light">
						
						<div class="card-body text-center text-success">
							<iframe  src="https://www.youtube.com/embed/JHwQaZUIPZE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card bg-light">
						
						<div class="card-body text-center text-success">
							<iframe  src="https://www.youtube.com/embed/Cux9cXTS16c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card bg-light">
						
						<div class="card-body text-center text-success">
							<iframe  src="https://www.youtube.com/embed/eB2C1xMcvP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
                 
                
			</div>
		</div>
	</div>
	<br>
</section>
<!-- <youtube link ends> -->
	
<br>

<?php 
include("footer.php");
?>