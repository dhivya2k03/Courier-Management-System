<html>
<head>
  <title>All Staff</title>
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
    <h1 Style="color:black">All Staff</h1>
    <hr style="background: linear-gradient(to right,#0a7ab8,#21529e 60%);">
 </div>
</div>


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





</body>
</html>