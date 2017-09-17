<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/table.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style>
.p1 {
    background-color:#ffffff;
}
</style>
</head>

<body class="p1">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ระบบตรวจสอบคุณภาพน้ำ</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Station 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="data">ข้อมูลการตรวจวัด</a></li>
          <li><a href="#">กราฟ</a></li>
          <!-- <li><a href="#">Page 1-3</a></li> -->
        </ul>
      </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mobile device <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="result">ข้อมูลการตรวจวัด</a></li>
          <li><a href="#">กราฟ</a></li>
         <!--  <li><a href="#">Page 1-3</a></li> -->
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ตารางคุณภาพน้ำ<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="animal">คุณภาพน้ำในการเลี้ยงสัตว์</a></li>
          <li><a href="water">คุณภาพน้ำประปา</a></li>
        
        </ul>
      </li>
    </ul>
  <!--  <ul class="nav navbar-nav navbar-right">
     <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul> -->
  </div>
</nav>
  
<!-- <div class="container">
  <h3>Right Aligned Navbar</h3>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
</div> -->

@section('sidebar')
           <!--  <center>Welcome My Page</center> -->
@show

</body>
</html>
