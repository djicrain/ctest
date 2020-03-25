<!-- above connection database is pdo -->
<!DOCTYPE html>
<html>

<title>parkdown</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="home.css" type="text/css">
<link rel="stylesheet" href="newstyle.css" type="text/css">
<body>
<!--users table status update feature -->
<?php

$servername = "localhost";
$username = "id10165103_root";
$password = "rootroot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=id10165103_test", $username, $password); // connect to the database
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e) //if there is a probleme in connection 
    {
    echo "Connection failed: " . $e->getMessage();
    } 


$sql = "UPDATE users INNER JOIN slots ON (users.slotNbr = slots.slotNbr) SET users.status = slots.status"; // update the table slots using values in the other table users 

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

?>

<!--booked update feature -->
<?php

$servername = "localhost";
$username = "id10165103_root";
$password = "rootroot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=id10165103_test", $username, $password); // connect to the databse
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e) // if there is an error 
    {
    echo "Connection failed: " . $e->getMessage();
    } 


$sql = "UPDATE users SET booked=0 WHERE status = 1"; // update the value booked and set it to 0 when the status of the place the user booked has changed to be unocupied this means that                                                       the user liberated that place and hence he have the right now to book an new place

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
    
?>




<!-- Links (sit on top) -- Top navigation -->

<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="homep.php" class="active">Home</a>
  </div>

  <!-- Left-aligned links (default) -->
  <a href="admin.php">Admin</a>
  

  <!-- Right-aligned links -->
  <div class="topnav-right">
    
    <a href="about.php">About</a>
  </div>

</div>

<!-- Header with image (hero image) -->
<div class="hero-image">
  <div class="hero-text">
    <h1>welcome to Parkdown</h1>
    <p>Reserve your parking slot!!</p>
    
  </div>
</div>

<!-- About title bookig form -->
<div class="fhead">
  <h1>Book your place now!!</h1>
</div>

<!-- php code to verify the data and validate them -->

<!-- About available table -->
<table style="margin-top:10px; margin-left:460px;" class="flat-table">
  <tbody>
    <tr>
      <th  style="color: #4CAF50;">slotId </th>
      <th  style="color: #4CAF50;">slotNbr</th>
      <th  style="color: #4CAF50;">status</th>
      <th  style="color: #4CAF50;">book</th>
      
    </tr>
    <tr> <!--first row -->
      <td> 1</td>
      <td> A01</td>

<?php // update the values of the status of the slots in the table 

$servername = "localhost";
$username = "id10165103_root";
$password = "rootroot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=id10165103_test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } 


$sql = "SELECT *   FROM slots WHERE status=1 and slotId=1"; // execute querry to check if the status of the first slot is free or not 

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
    $user1 = $stmt->fetch();
    if ($user1) { // if it is free diplay the picture that show yes 
      echo "<td class='statusicon'><img src='ye.png' alt='there should be a yes picture here' width='30' 
         height='30'></td> ";
    }
    else { echo "<td class='statusicon'><img src='no1.png' alt='there should be a no picture here' width='30'
         height='30'></td>";} // else display the picture that indicate the place is occupied 

?>

      
      <td><a href="book01.php" class="active">book</a></td>
      <!-- end first row -->
    </tr>
       <tr> <!--second row -->
      <td> 2</td>
      <td> A02</td>

<?php

$servername = "localhost";
$username = "id10165103_root";
$password = "rootroot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=id10165103_test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } 


$sql = "SELECT *   FROM slots WHERE status=1 and slotId=2";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
    $user2 = $stmt->fetch();
    if ($user2) {
      echo "<td class='statusicon'><img src='ye.png' alt='there should be a yes picture here' width='30'
         height='30'></td>";
    }
    else { echo "<td class='statusicon'><img src='no1.png' alt='there should be a no picture here' width='30'
         height='30'></td>";}

?>

      
      <td><a href="book02.php" class="active">book</a></td>
      
    </tr> <!--end second row -->
    <tr>  <!--third row -->
      <td> 3</td>
      <td> A03</td>

<?php

$servername = "localhost";
$username = "id10165103_root";
$password = "rootroot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=id10165103_test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } 


$sql = "SELECT *   FROM slots WHERE status=1 and slotId=3";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
    $user3 = $stmt->fetch();
    if ($user3) {
      echo "<td class='statusicon'><img src='ye.png' alt='there should be a yes picture here' width='30'
         height='30'></td>";
    }
    else { echo "<td class='statusicon'><img src='no1.png' alt='there should be a no picture here' width='30'
         height='30'></td>";}

?>

      
      <td><a href="book03.php" class="active">book</a></td>
      
    </tr> <!--end third row -->

    <tr>  <!--fourth row -->
      <td> 4</td>
      <td> B01</td>

<?php

$servername = "localhost";
$username = "id10165103_root";
$password = "rootroot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=id10165103_test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } 


$sql = "SELECT *   FROM slots WHERE status=1 and slotId=4";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
    $user4 = $stmt->fetch();
    if ($user4) {
      echo "<td class='statusicon'><img src='ye.png' alt='there should be a yes picture here' width='30'
         height='30'></td>";
    }
    else { echo "<td class='statusicon'><img src='no1.png' alt='there should be a no picture here' width='30'
         height='30'></td>";}

?>

      
      <td><a href="book04.php" class="active">book</a></td>
      
    </tr> <!--end fourth row -->

    <tr>  <!--fifth row -->
      <td> 5</td>
      <td> B02</td>

<?php

$servername = "localhost";
$username = "id10165103_root";
$password = "rootroot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=id10165103_test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } 


$sql = "SELECT *   FROM slots WHERE status=1 and slotId=5";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
    $user5 = $stmt->fetch();
    if ($user5) {
      echo "<td class='statusicon'><img src='ye.png' alt='there should be a yes picture here' width='30'
         height='30'></td>";
    }
    else { echo "<td class='statusicon'><img src='no1.png' alt='there should be a no picture here' width='30'
         height='30'></td>";}

?>

      
      <td><a href="book05.php" class="active">book</a></td>
      
    </tr> <!--end fifth row -->

    <tr>  <!--third row -->
      <td> 6</td>
      <td> B03</td>

<?php

$servername = "localhost";
$username = "id10165103_root";
$password = "rootroot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=id10165103_test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } 


$sql = "SELECT *   FROM slots WHERE status=1 and slotId=6";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
    $user6 = $stmt->fetch();
    if ($user6) {
      echo "<td class='statusicon'><img src='ye.png' alt='there should be a yes picture here' width='30'
         height='30'></td>";
    }
    else { echo "<td class='statusicon'><img src='no1.png' alt='there shoud be a no picture here' width='30'
         height='30'></td>";}

?>

      
      <td><a href="book05.php" class="active">book</a></td>
      
    </tr> <!--end third row -->

  </tbody>
  </table>




 <!-- using jquery to use ajax -->
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>









<!-- End page content -->
</div>

<a target="_blank" rel="noopener noreferrer" href="http://192.168.43.220/D1/1" ><input type=button value='led1 on'></a>
<a target="_blank" rel="noopener noreferrer" href="http://192.168.43.220/D1/0" ><input type=button value='led1 off'></a>
<a target="_blank" rel="noopener noreferrer" href="http://192.168.43.220/D2/1" ><input type=button value='led2 on '></a>
<a target="_blank" rel="noopener noreferrer" href="http://192.168.43.220/D2/0" ><input type=button value='led2 off'></a>
<a target="_blank" rel="noopener noreferrer" href="http://192.168.43.220/D3/1" ><input type=button value='led3 on'></a
>
<a target="_blank" rel="noopener noreferrer" href="http://192.168.43.220/D3/0" ><input type=button value='led3 off'></a>


 

<!-- Footer -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="footertext">
            <h6>About</h6>
            <p class="text-justify">this website has been build by two INELEC students Cherchari Abdemalek and Akrouf aimen supervised by Dr. Dalila Cherifi, whose advice, support, encouragement and guidance through the research and the developement of our project "Smart parking managment system". The idea was to create a booking systeme to make the users able to reserve their places to park there later.</p>
          </div>

          

          
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; All Rights Reserved by 
            </p>
          </div>

          
        </div>
      </div>
</footer>
  <!-- Footer -->



</body>
</html>
