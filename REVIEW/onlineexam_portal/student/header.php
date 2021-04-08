
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
    <!-- <fontawsome link> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="head.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="tophead">

      <div class="brandlogo text-white">Score More <i class="fa fa-angellist text-warning" aria-hidden="true"></i></div>
      <div>
        <span class="menulines" onclick="openNav()">&#9776;</span>
      </div>
    </div>
  </header>
  <div class="sidenav" id="mysidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closebtn()">&times;</a>
    <!--  <div class="bg-warning text-center"> Admin Pannel</div> -->
   
    <a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
    <a href="dbms.php"><i class="fa fa-database" aria-hidden="true"></i> DBMS</a>
    <a href="ds.php"><i class="fa fa-list" aria-hidden="true"></i> Data structure</a>
    <a href="os.php"><i class="fa fa-desktop" aria-hidden="true"></i> Operating system</a>
    <a href="cn.php"><i class="fa fa-connectdevelop" aria-hidden="true"></i> Comp.Networks</a>   
    <a href="assign_leave.php"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact us</a>

    <a href="http://localhost/onlineexam_portal/index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

  </div>
  <section class="main-part text-center">
   
  </section>
  <script type="text/javascript">
    function openNav()
    {
      document.getElementById('mysidenav').style.width="250px"; 
    }
    function closebtn()
    {
      document.getElementById('mysidenav').style.width="0px"; 
    }
  </script>
</body>
</html>