<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | AdminLab </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-admin'></i>
      <span class="logo_name">AdminLab</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php" class="active" style="position: relative;top: 200px;">
            <i>x</i>
            <span class="links_name" >Logout</span>
          </a>
        </li>
       
       
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
     
     
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total employees</div>
            <center>
            <div class="number">
<?php 

$conn=mysqli_connect("fdb1033.awardspace.net","4428097_auth","admin123(*)","4428097_auth");
  $query=mysqli_query($con,"SELECT num FROM employee");
  $sum=0;
  if ($query->num_rows>0) {
   while($row =$query->fetch_assoc()){
    $sum += $row['num'];
   }
   ?>
  <?php
  echo "<p>".$sum."</p>"; 
 
  }else{
    echo "<h2>0</h2>";
  }
   ?>

            </div>
            </center>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
         
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"></div>
            <div class="number"></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"></div>
            <div class="number"></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
         
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"></div>
            <div class="number"></div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <h1 class="titletext">Update or Delete Employee</h1>
          <div class="sales-details"><br>
            <div class="tablediv">
            <table border="1">
              <tr>
              <th>Employees</th>
              <th>Address and Position </th>
             
              <th>Update</th>
              <th>Delete</th>
              </tr>
       
<?php
$conn=mysqli_connect("fdb1033.awardspace.net","4428097_auth","admin123(*)","4428097_auth");
$query =mysqli_query($con,"SELECT * from employee");
while($row =mysqli_fetch_assoc($query)){
?>
<form method="post" action="delup.php" >
  <tr> 
<td><input style="background-color: green;color: white;text-align: center;" class="input1"type="" value="<?php  echo $row['fname'];  ?>" name="fname"></td>
  </tr>
   <tr> 
<td><input style="text-align: center;" class="input1"  type="" value="<?php  echo $row['lname'];  ?>" name="lname"></td>
<td><input class="input1"  type="text" value="<?php  echo $row['address'];  ?>" name="address">
</tr>

<td>
</td>
<td><input class="input1" type="text" value='<?php  echo $row["position"]  ?> ' name="position"></td>
<input class="input1" type="hidden" value='<?php  echo $row["id"]  ?> ' name="id">
  <td><input style="color: blue" type="submit" value="Update" name="update">
    <td><input style="color: red" type="submit" value="Delete" name="delete"><br>
 </form>


<?php
  ?>


  <?php
}

?>
</tr>
<tr></tr>
<br>
</table>

</div>
          </div>
          
        </div>
        <div class="top-sales box">
          <div class="title">List of Employees</div>
     <br>   
<div style="overflow: auto; position: relative;top: 0px;border:solid 1px;;">
<center>
 <table style="position: relative;top: 0px;" border="1">
              <tr>
              <th style="color: white;background-color: green">Full Name</th>
              <th>Address</th>
                <th>Position</th>
             
           
              </tr>
        
<?php
$conn=mysqli_connect("fdb1033.awardspace.net","4428097_auth","admin123(*)","4428097_auth");

$query =mysqli_query($con,"SELECT * from employee");
while($row =mysqli_fetch_assoc($query)){
 
  echo "<tr><td style='color: white;background-color: green'>".$row['lname'].' '.$row['fname'];
  echo "<td>".$row['address'];
    echo "<td>".$row['position']."<br>"."</tr>";


  ?>


  <?php
}

?>

</table>
</center>
        </div>
      </div>
</div>


      <br><div class="add"> <div class="title"><br><h1 class="titletext"> Add new employee</h1></div><center>
        <form action="addemployee.php" method="post"><br>
          <input class="input" type="text" required="required"  placeholder="First Name" name="fname"><br>
             <input class="input" type="text" required="required"  placeholder="Last Name"name="lname" ><br>
                <input class="input" type="text" required="required" placeholder="Address"  name="address"><br>
                   <input class="input" type="text" required="required"  placeholder="position" name="position"><br>
                    <input class="input" type="hidden" value="1"  placeholder="position" name="num">
                      <input class="btnadd" value="add" type="submit" name="add">
                       </form>

      </div></center><br><br>
    </div>


  </section>

  

</body>
</html>


<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

 <style type="text/css">
   .add{
    width: 95%;
    height: 70vh;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      position:relative;
      left: 20px;
      background-color: white;
      border-radius: 10px;

   }
   .input{
    width: 300px;
    height: 30px;
    position: relative;
    top: 50px;
    margin-bottom: 2rem;
   }
   .btnadd{
 position: relative;
    top: 50px;
    height: 4vh;
    width: 50px;
    background-color: dodgerblue;
    border:none;
    color: white;
transition: 0.1s ease;
   }
   .btnadd:hover{
    transform: scale(1.1);
   }
   .titletext{
    position: relative;
    left: 20px;
    font-family: sans-serif;
   }
   th{
    width: 100px;
    border:none;
    background-color: dodgerblue;
    color: white;
    text-align: center;
   }
   .tablediv{
    position: relative;
    left: -10px;
    top: 10px;
    overflow: auto;
    width: 100%;
    height: 50vh;

   }
   td{
    text-align: center;
   }
   table{
    border:none;
    position: relative;

   }
  
 </style>