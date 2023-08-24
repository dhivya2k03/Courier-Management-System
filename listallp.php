<html>
<head>
  <title>All Parcel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
</head>
<style>
  td{
    width:25%;

  }
  .table2{
    width:2%;
    
  
}
#fname2{
  width:100%;
}
</style>
 <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

<body>
  <div class="sidenav">
    <a href="home.php" style="color: white;">Dashboard</a>
    <button class="dropdown-btn">Parcels 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="parcel_add_new.php">Add New</a>
      <a href="listallp.php">List All</a>
    </div>
    <a href="in_transit.php">In-Transit</a>
    <a href="delivered.php">Delivered</a>
    <button class="dropdown-btn">Branch Staff
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="branch_staff.php">Add New</a>
      <a href="listallb.php">List All</a>
    </div>
    <a href="about.php">About</a>
  </div>
  </div>
<div class="main">
  <div class="container">
    <h1 Style="color:black">All Parcel</h1>
    <hr style="background: linear-gradient(to right,#0a7ab8,#21529e 60%);">
	<table>
	<thead>
					<tr>
						<th class="text-center">ID</th>
						<th>Sender</th>
						<th>Receiver</th>
						<th>SAddress</th>
						<th>RAdrress</th>
						<th>SContact</th>
						<th>RContact</th>
						<th>Weight</th>
						<th>Height</th>
						<th>Width</th>
						<th>Length</th>
						<th>Price</th>
					</tr>
				</thead>
	<?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "courier");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $sname =  $_REQUEST['sname'];
        $rname = $_REQUEST['rname'];
        $saddress =  $_POST['saddress'];
        $raddress = $_POST ['raddress'];
        $scontact = $_REQUEST['scontact'];
		$rcontact = $_REQUEST['rcontact'];
		$wg = $_REQUEST['wg'];
		$hg = $_REQUEST['hg'];
		$wid = $_REQUEST['wid'];
		$len = $_REQUEST['len'];
		$price = $_REQUEST['price'];
         $i = 1;
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO parcel  VALUES ('$sname',
            '$rname','$saddress','$raddress','$scontact','$rcontact','$wg','$hg','$wid','$len','$price')";
         
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("data stored in a database successfully.")</script>';
		}
                    $qry = $conn->query("SELECT * from parcel ");
					while($row= $qry->fetch_assoc()):
		?>
					<tr>
						<td class="text-center"><?php echo $i++ ?></td>
						<td><b><?php echo ($row['sname']) ?></b></td>
						<td><b><?php echo ucwords($row['rname']) ?></b></td>
						<td><b><?php echo ucwords($row['saddress']) ?></b></td>
						<td><b><?php echo ucwords($row['raddress']) ?></b></td>
						<td><b><?php echo ucwords($row['scontact']) ?></b></td>
						<td><b><?php echo ucwords($row['rcontact']) ?></b></td>
						<td><b><?php echo ucwords($row['wg']) ?></b></td>
						<td><b><?php echo ucwords($row['hg']) ?></b></td>
						<td><b><?php echo ucwords($row['wid']) ?></b></td>
						<td><b><?php echo ucwords($row['len']) ?></b></td>
						<td><b><?php echo ucwords($row['price']) ?></b></td>
						<td class="text-center">   </td>    </tr>	<?php endwhile; ?></table>    


		  
			<!--('$sname','$rname','$saddress','$raddress','$scontact','$rcontact','$wg','$hg','$wid','$len','$price')";-->
     
 </div>
</div>
</body>
</html>