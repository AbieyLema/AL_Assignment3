<?php 

if ( ! empty($_POST)) {

$vendorNo = $_POST['vendorNo'];
$description = $_POST['Description'];
$OnHand = $_POST['OnHand'];
$OnOrder = $_POST['OnOrder'];
$Cost = $_POST['Cost'];
$ListPrice = $_POST['ListPrice'];
$Success = 'Parts Info Table Updated Successfully';




$sql = "insert into Parts ( vendorNo, Description,  OnHand, OnOrder, Cost,ListPrice) VALUES ('$vendorNo', '$description', '$OnHand', '$OnOrder', '$Cost', '$ListPrice')";


include('connection.php');

$dbConnection = ConnectToDatabase();

$preparedSQL = $dbConnection->prepare($sql);

$preparedSQL->execute();

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- This is how you link your external JS file to your HTML -->
    <script type="text/javascript" src="js/script.js"></script>

    <button type="button" onclick="location.href='index.php'">Main Menu</button>
    <br/><br/>
</head>
<body>



  <?php if(isset($status) && $status == 'create_success'): ?>
    <p>Parts Info Updated successfully.</p>
  <?php endif; ?>

  <form name="myform" method="Post" onsubmit="return formSubmit();"  action="" >
    <label>Vendor Number:</label>
    <input id="vendorNo" placeholder="" type="text" name="vendorNo"><br/>

    <label>Description:</label>
    <input id="Description" placeholder="" type="text" name="Description"><br/>

    <label>On Hand:</label>
    <input id="OnHand" placeholder="" type="text" name="OnHand"><br/>

    <label>On Order:</label>
    <input id="OnOrder" placeholder="" type="text" name="OnOrder"><br/>

    <label>Cost: $</label>
    <input id="Cost" placeholder="" type="text" name="Cost"><br/>

    <label>List Price: $</label>
    <input id="ListPrice" placeholder="" type="text" name="ListPrice"><br/>
    
  

    <br/><br/>

    <input type="submit" value="Submit">
    <br/><br/>
    


    <p id="errors"></p>
  </form>  
  
  <div class="formData">

  <?php if ( ! empty($_POST)): ?>
                Status: <?php echo $Success; ?> <br>
            

  <?php else: ?>
    <p id="formResult">This is where the status of update will show up.</p>
  <?php endif; ?>



  </div>
</body>
</html>
