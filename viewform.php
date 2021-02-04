<!doctype html>
<html lang="en">

<head>
    <title>Form Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
</head>

<body>

    


    <div class="container-fluid">
        
        <a name="" id="" class="btn btn-success w-100" href="form.php" role="button">Insert Data</a>
    <div class="table" style="padding: 20px;">
        <table class="table table table-dark">
            <thead >
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Date Of Birth</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Class</th>
                    <th>Update/Delete Data</th>
                    
                    
                </tr>
            </thead>
            <tbody id  = "tbody" >
           
                
                      <?php
                                    require "hasnain_con.php";
                                $mysql = "select * from form"; 
                                $result = $conection->query($mysql);

                                if ($result->num_rows>0) {
                                    while ($row = $result->fetch_assoc()){
                                        echo "<tr><td>".$row['Student_id']. "</td>" ;
                                        echo "<td>".$row['Name']. "</td>" ;
                                        echo "<td>".$row['Date_of_Birth']. "</td>" ;
                                        echo "<td>".$row['Email']. "</td>" ;
                                        echo "<td>".$row['Phone_no']. "</td>" ;
                                        echo "<td>".$row['Class']. "</td>" ;
                                        echo "<td><a name='' class='btn btn-primary' href='update.php?id={$row['Student_id']}' role='button'>UPDATE</a> 
                                        <a name='' class='btn btn-danger' href='delete.php?id={$row['Student_id']}' role='button'>DELETE</a> </td>" ;
                                        
                                            
                                        
                                    
                                    }
                                }


                        ?>
                       
            </tbody>
        </table>
    </div>
</div>