 
 <?php 
  session_start();
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>View All Customers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/transactionhistorystyles.css">
	<style >
    
  </style>
</head>
<body>
  <form >
  
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
		<i class="fas fa-bars"></i>
	</label>
	<label class="logo">BASIC BANKING SYSTEM</label>
	 	<ul>
	 		 <div class="menu">
        <li> <a href="index.html" class="active1" >HOME</a></li>
        <li ><a href="allCustomers.php" class="active1"> View All Customers</a></li>
        <li> <a href="" class="active" >TRANSACTION HISTORY</a></li>
   </div>
    </ul>
  </nav>
  <form action="" method="POST">
 	<div>
 	<table  border="2px" style=" line-height: 50px;" ;>
 		<tr>
 		<th colspan="8"><h3>Transactions Details</h3></th>
 	</tr>
 	  <t>
      <th>Id</th>
      <th>From Account</th>
 		<th>IFSC</th>
 		
 		<th>TO Account</th>
      <th>Amount</th>   
     	    </t>
     	    
                 	  	
 	<?php 
       include "dbconnection.php"; 
          
          
          $sqlii="SELECT * from transfers order by id
           ";
        	$result=mysqli_query($conn,$sqlii); 
          $count=mysqli_num_rows($result);
                   while($rows= mysqli_fetch_assoc($result)){
                   	?><div>

                   	  <tr >
                         <td> <?php  echo $rows['id']; ?></td>
                          <td> <?php  echo $rows['fromAccount']; ?></td>
                           <td> <?php  echo $rows['ifsc']; ?></td>
                        
                           <td> <?php  echo $rows['toAccount']; ?></td>
                            <td> <?php  echo $rows['amount']; ?> </td>
                         
                   	  </tr>
                   
                   </div>
                    <?php 
                   } 
                           
 	 ?></a>

 	</table>

 	</div>
  
 </form>
 </body>
</html>


     
</form>
</body>
</html>