<?php
include("../classes/manage_users_class.php");
$users = new manage_users_class;      // creating object of  manage_courses_class.php
$users = $users->display_users();    //calling display_courses() method from manage_courses_class.php

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Manage Users</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/manage_user.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    .sidebar-list {
      margin-right: -15px;

      font-family: 'Quicksand', sans-serif;
      font-size: 14px
    }

    .sidebar-list li:hover {
      background-color: deepskyblue !important;
    }

    .sidebar-list li a {
      color: white;
      text-decoration: none;
    }

    .mytable1 .card {
      background: #5f2c82;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #49a09d, #5f2c82);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .mytable2 .card {
      background: #EC6F66;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #F3A183, #EC6F66);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #F3A183, #EC6F66);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .card {
      overflow: hidden;
      transition: all 0.9s ease;
    }

    .card:hover {
      transform: scale(1.04);
    }
  </style>

</head>

<body style="background-color:#f1efef">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <a class="navbar-brand text-white" href="../login.php">E-LEARNING</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link text-white" href="../admin_main.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link text-white" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
      </ul>
      <!-- 5 -->
    </div>
  </nav>



  <!-- sidebar starts -->

  <div class="container-fluid" style="margin-top: 50px;">
    <div class="row">
      <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar">
        <ul class="list-group text-white sidebar-list">
          <li class="list-group-item  bg-dark "><a href="../admin_main.php">Welcome Admin</a></li>
          <li class="list-group-item bg-dark "><a href="../manage_courses/manage_courses.php">Manage Courses</a></li>
          <li class="list-group-item bg-dark"><a href="../manage_quiz/manage_quiz.php">Manage Quiz</a></li>
          <li class="list-group-item bg-dark"><a href="../manage_videos/manage_videos.php">Manage Videos</a></li>
          <!-- <li class="list-group-item bg-dark"><a href="">Manage Comments</a></li> -->
          <li class="list-group-item bg-dark"><a href="../manage_users/manage_users.php">Manage Users</a></li>
          <!-- <li class="list-group-item bg-dark"><a href="../login.php">Logout</a></li> -->
          <li class="list-group-item bg-dark" style="height: 400px;"></li>
        </ul>
      </div>


      <div class="col-md-9">
        <!-- list of users starts -->

        <table class="table m-5 bg-white shodow pl-5 table-responsive users-table" style=" height : 80vh; overflow-y: scroll;display: inline-block; width: 100% - 10px">

          <!-- table stsrts  -->
          <thead>
            <tr>

              <th scope="col">Id</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">email id</th>
            </tr>
          </thead>
          <tbody style="outline: 10px ;">

            <?php
            foreach ($users as $userdata) {
            ?>
            <tr>
              <th scope="row"><?php echo $userdata['id']; ?></th>
              <td><?php echo $userdata['username']; ?></td>
              <td><?php echo $userdata['password']; ?></td>
              <td><?php echo $userdata['email']; ?></td>
              <td>
                <div class='btn-group'> 
                    
                    <form action='./actions/action_manage_user.php' method='post' enctype='multipart/form-data'>
                      <input type='hidden' name="id" value='<?php echo $userdata['id']; ?> ' > 
                      <button type='submit' class='btn btn-danger' name='btn-delete-user'>Delete</button>
                    </form>    
					      </div>
					    </td>
                 


            </tr>

            <?php } ?>



          </tbody>
        </table>

        <!-- table ends  -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script>
          window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

      </div>
</body>

</html>