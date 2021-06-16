<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HUM-BANJARA | Gallary</title>
    <script type="jquery/jwuery.js"></script>
    <link rel="shortcut icon" type="photos/png" href="home/logo.png">
    <link rel="stylesheet" type="text/css" href="showdata.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>


<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      
      <img class="nav-logo" src="home/home.png">
      <label class="logo"> Hum-Banjara</label>
      
      <ul>
        <li><a href="index.html" style="color:#b2bec3;">Home</a></li>
        <li><a  href="about.html";>About</a></li>
        <li><a href="culture.html">Culture</a></li>
        <li><a  href="history.html">History</a></li>
        <li><a  href="gallary.html"> Gallary</a></li>
        <li><a  href="registation.html">My Profile</a></li>
        <li><a class="donate" href="donate.html">Donate us</a></li>
      </ul>

    </nav>


<script>
    let navbar = document.querySelector('nav');
    var scrollPrev = window.pageYOffset;
    window.onscroll = function(){
      var scrollCur = window.pageYOffset;
      if(scrollPrev > scrollCur){
        navbar.style.top = "0";
      }else{
        navbar.style.top = "-60px";

      }
      scrollPrev = scrollCur;
    }
    </script>


<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>


<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


  <form class="form-inline" action="#">
    <button class="btn btn-success" type="submit">Search</button>
   <input class="form-control mr-sm-2" type="text" placeholder="Search">
     
  </form>
  <style>
      .form-inline{

        display: flex;
        margin-top: 80px;
        margin-left: 30px;
        margin-right: 20px;
      }
  </style>



<div id="main-content">
    <h2>Hum-Banjara Registered people list</h2>

<?php

$conn=mysqli_connect("localhost","root","","banjara") or die("conection failed"); //connection start
$sql="SELECT * FROM humbanjara"; //connetion values insert cheyadam
$result=mysqli_query($conn, $sql) or die("query unsucssful."); //query connection linking
 if(mysqli_num_rows($result)>0){
?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Photo</th>
        <th>Full Name</th>
        <th>Mobile Number</th>
        <th>Mail id</th>
         <th>Password</th>
         <th>Gender</th>
          <th>Country</th>
           <th>State</th>
          
 <th>Action</th>

        </thead>
        <tbody>



            <tr>
                <td>1</td>
                <td><img src="bhanu.jpg"></td>
                <td>Malothu lachiramnaik</td>
                <td>9553716082</td>
                <td></td>
                <td>lachi2001</td>
                <td>male</td>
                <td>india</td>
                <td>Telangana</td>

                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete.php'>Delete</a>
                </td>
            </tr>
            
<?php
while($row=mysqli_fetch_assoc($result)){

?>

            <tr>
                <td><?php echo  $row['ID'];    ?></td>
                <td><?php  echo  $row['PHOTO'];     ?></td>
                <td><?php  echo  $row['FULL NAME'];     ?></td>
                <td><?php  echo  $row['MOBILE NUMBER'];     ?></td>
                <td><?php  echo  $row['MAIL ID'];     ?></td>
                <td><?php  echo  $row['PASSWORD'];     ?></td>
                <td><?php  echo  $row['GENDER'];     ?></td>
                <td><?php   echo  $row['COUNTRY'];    ?></td>
                <td><?php    echo  $row['STATE'];   ?></td>

                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete.php'>Delete</a>
                </td>
            </tr>

<?php } ?>

        </tbody>
    </table>
  <?php  }  ?>
</div>
</div>
</body>
</html>