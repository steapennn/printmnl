<?php include 'header.php';?>
<script src="js/swalalert.js"></script>
<main>
    <form class="jl" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
    <div class="row justify-content-md-center" style="padding:10px 10px 10px 10px;">
        <div class="col-5">
          <input type = "text" class="form-control form-control-md"  name = "txtsearch" placeholder="Search">
          </div>
          <div class="col-5">
                <input type = "submit" name = "btnsubmit" class="btn btn-info" value = "Search">
                
            </div><a type = "button" class="btn btn-primary" href="service.php"><i class="fa fa-plus"></i></a>
            
            </div>
          <?php
    function build_table($result){

    if(mysqli_num_rows($result) > 0){
    echo "<content id='mainContent'>";
    echo "<table class='table table-borderless'>";
    echo"<tr>";
    echo"<th scope='col'>Client Id#</th>";
    echo"<th scope='col'>Fullname</th>";
    echo"<th scope='col'>Contact number</th>";
    echo"<th scope='col'>Company name</th>";
    echo"<th scope='col'>Company Address</th>";
    echo"<th scope='col'>Availed Service</th>";
    echo"<th scope='col'>Fabric type</th>";
    echo"<th scope='col'>Clothing type</th>";
    echo"<th scope='col'>Size</th>";
    echo"<th scope='col'>Quantity</th>";
    echo"<th scope='col'>Machine</th>";
    echo"<th scope='col'>Payment</th>";
    echo"<th scope='col'>Status</th>";
    echo"<th scope='col'>Action</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo"<td>" . $row['client_id']. "</td>";
        echo "<td>" . $row['Fullname'] . "</td>";
        echo "<td>" . $row['Contact_number'] . "</td>";
        echo "<td>" . $row['Company_name'] . "</td>"; 
        echo "<td>" . $row['Company_Address'] . "</td>"; 
        echo "<td>" . $row['Service_Avail'] . "</td>";
        echo "<td>" . $row['Fabric_type'] . "</td>";
        echo "<td>" . $row['Clothing_Type'] . "</td>";
        echo "<td>" . $row['Size'] . "</td>";
        echo "<td>" . $row['Quantity'] . "</td>";
        echo "<td>" . $row['Machine'] . "</td>";
        echo "<td>" . $row['Payment'] . "</td>";
        echo "<td>" . $row['Status'] . "</td>";
        echo "<td>";
				echo "<div class='btn-group'>";
				echo "<a class='btn btn-primary btn-md' href='update-equipments.php?Serial_number=" . $row['client_id'] .  " 'rel='modal:open'><i class='fa fa-pencil-square-o'></i></a>";
				echo "<a class='btn btn-danger btn-md' href='Working.php?Serial_number=" . $row['client_id'] .  " 'rel='modal:open'><i class='fa fa-trash-o'></i></a>";
		echo "</tr>";
		echo "</td>";
        echo "</div>";
        

    }
    echo "</table>";
    echo "</content>";
    }
    else{
    echo "No user/s found";

    }
    }
    require_once "config.php";
if(isset($_POST['btnsubmit'])){
  $sql = "SELECT * FROM tblclient WHERE client_id <> ? AND (Fullname LIKE ? OR Company_name LIKE ? OR Service_Avail LIKE ?) ORDER BY client_id";
  if($stmt = mysqli_prepare($link, $sql)){
    $search = '%' . $_POST['txtsearch'] . '%';
    mysqli_stmt_bind_param($stmt, "ssss", $_SESSION['username'], $search, $search , $search);
    if(mysqli_stmt_execute($stmt)){
      $result = mysqli_stmt_get_result($stmt);
      build_table($result);
    }
    else{
      echo "Error on search";
    }
  } 
}
else{
  $sql = "SELECT * FROM tblclient WHERE client_id <> ? ORDER BY client_id";
  if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "s" , $_SESSION['username']);
    if(mysqli_stmt_execute($stmt)){
      $result = mysqli_stmt_get_result($stmt);
      build_table($result);

    }
    else{
      echo "Error on Accounts Load";
    }
    
  }
}

?>
    </form>
</main>

<?php include 'footer.php';?>
