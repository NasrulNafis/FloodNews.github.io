<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flood-news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


<html>
<head>
<title>FloodNews.com.my</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/second.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Flood News</b></h1>
  <p>Providing news related to flood disaster in<span class="w3-tag">Malaysia</span></p>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="news.php">News & Article</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>    
    </ul>
  </div>  
</nav>
<rssapp-ticker id="MUjuTv5iOhm5FTed"></rssapp-ticker><script src="https://widget.rss.app/v1/ticker.js" type="text/javascript" async></script></header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <rssapp-magazine id="MUjuTv5iOhm5FTed"></rssapp-magazine><script src="https://widget.rss.app/v1/magazine.js" type="text/javascript" async></script>    <div class="w3-container">
    <?php
  $sql = "SELECT detail FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " News : " . $row["detail"]. "</br></br></br>";
  }
} else {
  echo "0 results";
}    
?>
    </div>
  </div>
  <hr>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">

      <rssapp-list id="MUjuTv5iOhm5FTed"></rssapp-list><script src="https://widget.rss.app/v1/list.js" type="text/javascript" async></script>    </li>
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Flood</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Natural Disaster</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Malaysia</span> 
    </p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>
</body>

<!-- Footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>Team</h6>
        <li>Project Manager : Syahmie</li>
        <li>News Writer : Zulhilmi</li>
        <li>Mobile Apps : Aqil Aiyman</li>
        <li>Web designer : Nasrul Nafis</li>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Categories</h6>
        <ul class="footer-links">
          <li>Flood</li>
          <li>Natural Disaster</li>
          <li>News</li>
          <li>Malaysia</li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Quick Links</h6>
        <ul class="footer-links">
          <li><a href="index.html">Home</a></li>
          <li><a href="news.php">Latest News</a></li>
          <li><a href="news.php">Top 5 News</a></li>
          <li><a href="https://www.accuweather.com/en/my/malaysia-weather">Weather</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved 
        </p>
      </div>
    </div>
  </div>
</footer>
<?php
 $conn->close();
?>
</html>
