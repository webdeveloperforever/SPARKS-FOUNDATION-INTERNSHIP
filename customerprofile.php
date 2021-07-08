<?php 
  session_start();
 ?>
<html>
<head><title>Customer Details </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS/profilestyles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
 </head>
 <body>
  <form action="" method="POST">

  <div class="box">
    <?php 
        include "dbconnection.php";  
           $customerId=$_GET['id'];
            $assqlii="SELECT * from customer WHERE id= $customerId  ";
            $assresult=mysqli_query($conn,$assqlii); 
          $asscount=mysqli_num_rows($assresult);
                   while($rows= mysqli_fetch_assoc($assresult)){
                    ?>
     <h2 style="text-align: center;"> <?php echo $rows['Name']; ?> 's PROFILE</h2>
         <div style="text-align: center;">
              <img class="img"  src="CSS/profile.jpg">
        </div>
        <div style="text-align: center;"><b>WELCOME</b>
         
        </div>
                   	    <?php
                           echo  "<table >";
                                echo "<tr>";
                                     echo "<td>";
                                       echo "<b>NAME </b>";
                                     echo "</td>";

                                       echo "<td>";
                                           echo $rows['Name'] ;
                                     echo "</td>";
                                echo "</tr>";

                                 echo "<tr>";
                                     echo "<td>";
                                       echo "<b>Account No </b>";
                                     echo "</td>";

                                       echo "<td>";
                                           echo $rows['accountnumber'] ;
                                     echo "</td>";
                                echo "</tr>";

                                 echo "<tr>";
                                     echo "<td>";
                                       echo "<b>IFSC</b>";
                                     echo "</td>";

                                       echo "<td>";
                                           echo $rows['ifsc'] ;
                                     echo "</td>";
                                echo "</tr>";

                                 echo "<tr>";
                                  echo "<td>";
                                        echo "<b>Account Type </b>";
                                   echo "</td>";

                                     echo "<td>";
                                        echo $rows['accountType'];
                                     echo "</td>";

                                echo "</tr>";
                                echo "<tr>";
                                  echo "<td>";
                                        echo "<b>E-MAIL </b>";
                                   echo "</td>";

                                     echo "<td>";
                                        echo $rows['Email'];
                                     echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                      echo "<td>";
                                       echo "<b>PHONE NUMBER </b>";
                                     echo "</td>";

                                       echo "<td>";
                                           echo $rows['Phone Number'];
                                     echo "</td>";
                                echo "</tr>";

                                  echo "<tr>";
                                  echo "<td>";
                                        echo "<b>Ammount </b>";
                                   echo "</td>";

                                     echo "<td>";
                                        echo $rows['amount'];
                                     echo "</td>";
                                echo "</tr>";

                                   echo "<tr>";
                                      echo "<td>";
                                       echo "<b>PIN</b>";
                                     echo "</td>";

                                       echo "<td>";
                                           echo $rows['pin'];
                                     echo "</td>";
                                echo "</tr>";

                           echo  "</table>";
                            
                               $_SESSION['amount']= $rows['amount'];
                                $_SESSION['pin']= $rows['pin'];  
                                 $_SESSION['accountNumber']= $rows['accountnumber'];  
                         ?>  
                           
                    <?php 
                   } 
                    if(isset($_POST['back'])) {
                            ?>
             <script>
              location.replace("allCustomers.php");
             </script>
             <?php
                         }  
                         if(isset($_POST['transferMoney'])) {
                            ?>
             <script>
              location.replace(" transfer.php");
             </script>
             <?php
                         }         
 	 ?>

 	</div>
   <div class="button" align="center";>
    <br> <br><button type="submit" name="back">Back</button>
    <button type="submit" name="transferMoney">Transfer Money</button>
  </div>
 </form>
 </body>
</html>