<?php
    include("init.php");

    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="normalize.css">
    <title>Dashboard</title>
    <style>
        .main{
          box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            color: #FF99CC;
            border-radius: 10px;
            border-width: 3px;
            border-style: solid;
            padding: 10px;
            margin: 8% 10% 10% 10%;
 }
    </style>
</head>
<body>

    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading"><img src="images\dashboard.png" alt="">&nbspDashboard</span>
        <a href="logout.php" style="color: black; text-decoration:none;  padding-top: 25%;"><img src="images\logout.png"></span> Logout</a>
    </div>

    <div class="nav">
      <ul>
        <li><a class="active" href="dashboard.php"><img src="images\admin1.png" alt="">&nbspDashboard</a></li>
        <li><a href="add_classes.php"><img src="images\plus.png" alt="">&nbspAdd Classes</a></li>
        <li><a href="manage_classes.php"><img src="images\businessman.png" alt="">&nbspManage Classes</a></li>
        <li><a href="add_students.php"><img src="images\add-user.png" alt="">&nbspAdd Students</a></li>
        <li><a href="manage_students.php"><img src="images\1.png" alt="">&nbspManage Students</a></li>
        <li><a href="add_results.php"><img src="images\plus-sign 1.png" alt="">&nbspAdd Result</a></li>
        <li><a href="manage_results.php"><img src="images\project-management 1.png" alt="">&nbspManage Result</a></li>
      </ul>
    </div>
<div class="container">
    <div class="main">
        <?php
            echo '<p><img src="images\tick.png">&nbspNo. of Classes:'.$no_of_classes[0].'</p>';
            echo '<p><img src="images\tick.png">&nbspNo. of Registered Students:'.$no_of_students[0].'</p>';
            echo '<p><img src="images\tick.png">&nbspResults Generated till date:'.$no_of_result[0].'</p>';
        ?>
    </div>
</body>
</html>

<?php
   include('session.php');
?>
