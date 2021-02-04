<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php 
        $id =  $_GET['id'] ;
        require 'hasnain_con.php' ;
        $sql = "select * from form where Student_id = '{$id}' " ;
        $result = $conection -> query($sql);
      
            while($row = $result->fetch_assoc()){
                    $id = $row['Student_id'] ;
                    $name = $row['Name'] ;
                    $dob = $row['Date_of_Birth'] ;
                    $email = $row['Email'] ;
                    $phone = $row['Phone_no'] ;
                    $class = $row['Class'] ;

            }
            // echo $id , $name ,$dob , $email , $phone  , $class ;
             
         

      ?>
       <div class="container">
            <h1 class="display-4">Update Your Data</h1>
           <form method="post" action="">
            <input class="form-control" type="text" name="name" placeholder="Enter Your Name" value=<?php echo $name ;?> ><br>
            <input class="form-control" type="date" name="date" value=<?php echo $dob ;?>><br>
            <input class="form-control" type="email" name="email" placeholder="Email" value=<?php echo $email ;?>><br>
            <input class="form-control" type="tel" name="phone" placeholder="Phone Number" value=<?php echo $phone ;?>><br>
            <input class="form-control" type="text" name="class" placeholder="Your Class" value=<?php echo $class ;?>><br>
            <button type="submit" class="btn btn-primary" name="submit">Send Data</button>
            <a name="" id="" class="btn btn-warning" href="viewform.php" role="button">View Data</a>
      </form>
      </div>
      <?php
      if(isset($_POST['submit'])){
          $name = $_POST['name'] ; 
          $dob = $_POST['date'] ; 
          $email = $_POST['email'] ; 
          $phone = $_POST [ 'phone'] ; 
          $class = $_POST['class'] ;

          $sql = "update form set Name ='{$name}' , Date_of_Birth = '{$dob}' , Email = '{$email}' , Phone_no = '{$phone}' , Class = '{$class}' where Student_id = '{$id}' ";
          if($conection->query($sql) === true){
            echo "<script type='text/javascript'> alert( 'Record Updated successfully'); </script>" ;
          } 
          else{
              echo 'Error Ocurred' ;
          }
      }
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>