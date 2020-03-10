<?php 

if ( ! empty($_POST)) {

$VendorNo = $_POST['VendorNo'];
$VendorName = $_POST['VendorName'];
$Address1 = $_POST['Address1'];
$City = $_POST['City'];
$Prov = $_POST['Prov'];
$PostCode = $_POST['PostCode'];
$Country = $_POST['Country'];
$Phone = $_POST['Phone'];
$Fax = $_POST['Fax'];
$Success = 'Vendors Info Table Updated Successfully';




$sql = "insert into Vendors ( VendorNo, VendorName, Address1, City, Prov, PostCode, Country, Phone, Fax) VALUES ('$VendorNo', '$VendorName', '$Address1', '$City', '$Prov', '$PostCode', '$Country', '$Phone', '$Fax')";


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
    <script type="text/javascript" src="js/script2.js"></script>

    
        
    <button type="button" onclick="location.href='index.php'">Main Menu</button>
    <br/><br/>

</head>
<body>



  <?php if(isset($status) && $status == 'create_success'): ?>
    <p>Parts Info Updated successfully.</p>
  <?php endif; ?>

  <form name="myform" method="Post" onsubmit="return formSubmit();"  action="" >
    
    <label>Vendor Number:</label>
    <input id="VendorNo" placeholder="" type="text" name="VendorNo"><br/>

    <label>Vendor Name:</label>
    <input id="VendorName" placeholder="" type="text" name="VendorName"><br/>

    <label>Address:</label>
    <input id="Address1" placeholder="" type="text" name="Address1"><br/>

    <label>City:</label>
    <input id="City" placeholder="" type="text" name="City"><br/>

    <label>State Abbrv:</label>
    <input id="Prov" placeholder="" type="text" name="Prov"><br/>

    <label>ZipCode: $</label>
    <input id="PostCode" placeholder="" type="text" name="PostCode"><br/>

    <label>Country: $</label>
    <input id="Country" placeholder="" type="text" name="Country"><br/>

    <label>Phone:</label>
    <input id="Phone" placeholder="" type="Text" name="Phone"><br/>

    <label>Fax:</label>
    <input id="Fax" placeholder="" type="Text" name="Fax"><br/>
    
  

    <br/><br/>

    <input type="submit" value="Submit">
    <br/><br/>
    


    <p id="errors"></p>
  </form>  
  
  <div class="formData">

  <?php if ( ! empty($_POST)): ?>
                Parts: <?php echo $Success; ?> <br>
            

  <?php else: ?>
    <p id="formResult">This is where the status of update will show up.</p>
  <?php endif; ?>



  </div>
</body>
</html>
