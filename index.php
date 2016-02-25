<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/customcss.css" rel="stylesheet">
  <script src="js/jquery-1.12.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
</head>

<body>
  <?php
    $whichPage = "home";
    if($_SERVER['SERVER_NAME'] == "http://p1.kushsdwa15.xyz/") {
      $whichPage = "project1";
    } elseif ($_SERVER['SERVER_NAME'] == "http://p2.kushsdwa15.xyz/") {
      $whichPage = "project2";
    } elseif ($_SERVER['SERVER_NAME'] == "http://p3.kushsdwa15.xyz/") {
      $whichPage = "project3";
    } elseif ($_SERVER['SERVER_NAME'] == "http://p4.kushsdwa15.xyz/") {
      $whichPage = "project4";
    }
  ?>
  <div class="container">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="<?php echo $whichPage=='home' ? ' active' : ''?>">
          <a href="#home" role="tab" data-toggle="tab">
              <icon class="glyphicon glyphicon-home"></icon>
          </a>
      </li>
      <li class="<?php echo $whichPage=='project1' ? ' active' : ''?>">
        <a href="#profile" role="tab" data-toggle="tab">
          <i class="fa fa-user"></i> Profile
          </a>
      </li>
      <li class="<?php echo $whichPage=='project2' ? ' active' : ''?>">
        <a href="#project2" role="tab" data-toggle="tab">
          <i class="fa fa-user"></i> Project 2
          </a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade <?php echo $whichPage=='home' ? ' active in' : ''?>" id="home">
        <p>The server you have reached is:
          <?php echo $_SERVER['SERVER_NAME']; ?>
        </p>
        <h4><b><u>Appendix:</u></b></h4>
        <div class="col-md-4">
          <div class="list-group">
            <a class="list-group-item <?php echo $whichPage=='project1' ? ' active' : ''?>" href="http://p1.kushsdwa15.xyz/">Project 1</a>
            <a class="list-group-item <?php echo $whichPage=='project2' ? ' active' : ''?>" href="http://p2.kushsdwa15.xyz/">Project 2</a>
            <a class="list-group-item disabledLink" href="http://p3.kushsdwa15.xyz/">Project 3<span class="badge">Coming Soon</span></a>
            <a class="list-group-item disabledLink" href="http://p4.kushsdwa15.xyz/">Project 4<span class="badge">Coming Soon</span></a>
          </div>
        </div>
      </div>
      <div class="tab-pane fade <?php echo $whichPage=='project1' ? ' active in' : ''?>" id="profile">
          <h2>Profile</h2>
          <div class="row">
            <div class="col-md-6">
              <img src='images/profile_pic.jpg' height="400" width="400">
            </div>
            <div class="col-md-6">
              <h4><b><u>BIO:</u></b></h4>
              <p><b>Location:</b></p>
              <p>Waltham, MA</p>
              <p><b>Education:</b></p>
              <p>Bachelor of Science in Robotics Engineering from Worcester Polytechnic Institute</p>
              <p><b>Work Experiance:</b></p>
              <p>Currently Software Developer at Vantiv</p>
              <p><b>Future Pursuit:</b></p>
              <p>Masters of Liberal Arts in Software Engineering</p>
              <p><b>Hobbies:</b></p>
              <p>Ultimate Frisbee, Skiing, Traveling, MTG, Gaming, E-Sports</p>
            </div>
          </div>
      </div>
      <div div class="tab-pane fade <?php echo $whichPage=='project1' ? ' active in' : ''?>" id="project2">

      </div>
    </div>
  </div>
</body>
</html>
