<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/style.css"> 
  <?php include('cdn.php'); ?>
  <title>Welcome</title>
</head>
<body>
     <?php  include('sidebar.php');
         include('adminMenu.php');
   ?>
  
<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>DASHBOARD</h1>
        <div class="row text-white ">
            <div class="col-md-4 mb-3 ">
                <div class="card bg-success mb-3 ">
                    <div class="card-header"><h5>Total Employee</h5></div>
                    <div  class="card-body">
                       <?php 
                        include("connection.php");

                        $total = "SELECT count(*) From employee";
                        $result=$conn->query($total);
                          
                          foreach($result as $val)
                          {
                            echo "<h1>".$val['count(*)']."</h1>";
                          }

                       ?>
                    </div>
                </div>
        </div>
        <div class="col-md-4 mb-3 ">
                <div class="card bg-danger mb-3 ">
                <div class="card-header"><h5>Managers</h5></div>
                <div  class="card-body">
                   <?php 
                    include("connection.php");

                    $total = "SELECT count(*) From employee where emp_profile=6";
                    $result=$conn->query($total);
                      
                      foreach($result as $val)
                      {
                        echo "<h1>".$val['count(*)']."</h1>";
                      }

                   ?>
                </div>
            </div>
        </div>
        </div>

      <div class="row text-white">

          

        <div class="col-md-2 mb-3">
            <div class="card bg-primary mb-3 ">
                <div class="card-header"><h5>Cashier</h5></div>
                <div  class="card-body">
                   <?php 
                    include("connection.php");

                    $total = "SELECT count(*) From employee where emp_profile=3";
                    $result=$conn->query($total);
                      
                      foreach($result as $val)
                      {
                        echo "<h1>".$val['count(*)']."</h1>";
                      }

                   ?>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
            <div class="card bg-info mb-3 ">
                <div class="card-header"><h5>Waiter</h5></div>
                <div  class="card-body">
                   <?php 
                    include("connection.php");

                    $total = "SELECT count(*) From employee where emp_profile=2";
                    $result=$conn->query($total);
                      
                      foreach($result as $val)
                      {
                        echo "<h1>".$val['count(*)']."</h1>";
                      }

                   ?>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
            <div class="card bg-dark mb-3 ">
                <div class="card-header"><h5>Cook</h5></div>
                <div  class="card-body">
                   <?php 
                    include("connection.php");

                    $total = "SELECT count(*) From employee where emp_profile=1";
                    $result=$conn->query($total);
                      
                      foreach($result as $val)
                      {
                        echo "<h1>".$val['count(*)']."</h1>";
                      }

                   ?>
                </div>
            </div>
        </div>


        <div class="col-md-2 mb-3">
            <div class="card bg-warning text-dark mb-3 ">
                <div class="card-header"><h5>Dishwasher</h5></div>
                <div  class="card-body">
                   <?php 
                    include("connection.php");

                    $total = "SELECT count(*) From employee where emp_profile=4";
                    $result=$conn->query($total);
                      
                      foreach($result as $val)
                      {
                        echo "<h1>".$val['count(*)']."</h1>";
                      }

                   ?>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
            <div class="card bg-secondary mb-3 ">
                <div class="card-header"><h5>Cleaner</h5></div>
                <div  class="card-body">
                   <?php 
                    include("connection.php");

                    $total = "SELECT count(*) From employee where emp_profile=5";
                    $result=$conn->query($total);
                      
                      foreach($result as $val)
                      {
                        echo "<h1>".$val['count(*)']."</h1>";
                      }

                   ?>
                </div>
            </div>
        </div>
        <div class="col-md-2 mb-3 ">
           <div class="card bg-danger mb-3 ">
                <div class="card-header"><h5>Runner</h5></div>
                <div  class="card-body">
                   <?php 
                    include("connection.php");

                    $total = "SELECT count(*) From employee where emp_profile=8";
                    $result=$conn->query($total);
                      
                      foreach($result as $val)
                      {
                        echo "<h1>".$val['count(*)']."</h1>";
                      }

                   ?>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>




