<?php include 'header.php';?>'
<script src="js/swalalert.js"></script>
<script src="js/notif.js"></script>
<link rel="stylesheet" type="text/css" href="css/account.css" />

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
</main>
<?php
    function build_table($result){

      if(mysqli_num_rows($result) > 0){
      echo "<content id='mainContent'>";
      echo "<table table table-borderless>";
      echo"<tr>";
      echo"<th scope='col'>Lastname</th>";
      echo"<th scope='col'>Firstname</th>";
      echo"<th scope='col'>Middlename</th>";
      echo"<th scope='col'>Username</th>";
      echo"<th scope='col'>Usertype</th>";
      echo"<th scope='col'>Status</th>";
      echo"<th scope='col'>Created by</th>";
      echo"<th scope='col'>Action</th>";
      echo"</tr>";
      while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td >" . $row['Lastname'] . "</td>";
        echo "<td >" . $row['Firstname'] . "</td>";
        echo "<td >" . $row['Middlename'] . "</td>";
        echo "<td >" . $row['username'] . "</td>";
        echo "<td>" . $row['usertype'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['createdby'] . "</td>";
        echo "<td>";
        echo "<div class='btn-group'>";
        echo "<a class='btn btn-success' href='update-accounts.php?username=" . $row['username'] .  " 'rel='modal:open'>Update </a>";
        echo "<a class='btn btn-light' href='Activate.php?username=" . $row['username'] .  " 'rel='modal:open'>Activate </a>";
        echo "<a class='btn btn-dark'href='Deactivate.php?username=" . $row['username'] .  " 'rel='modal:open'>Deactivate </a>";
        echo "<a class='btn btn-danger'href='Delete.php?username=" . $row['username'] .  " 'rel='modal:open'>Delete </a>";
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
  $sql = "SELECT * FROM tblaccount WHERE username <> ? AND (username LIKE ? OR Firstname LIKE ? OR Lastname LIKE ?) ORDER BY username";
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
  $sql = "SELECT * FROM tblaccount WHERE username <> ? ORDER BY username";
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