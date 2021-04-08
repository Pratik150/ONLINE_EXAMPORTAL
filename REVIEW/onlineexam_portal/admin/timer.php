<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Timer 30 Minutes jQuery Code Demo</title>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
<script>
var countdown = 10 * 60 * 1000;
var timerId = setInterval(function(){
  countdown -= 1000;
  var min = Math.floor(countdown / (60 * 1000));
  var sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);
  if (countdown <= 0) 
  {
     alert("Time is up. You can't submit test now.");
     clearInterval(timerId);
  } 
  else 
  {
     $("#countTime").html(min + " : " + sec);
  }
}, 1000);
</script>
<h1 id="countTime"></h1>
</body>
</html> 
