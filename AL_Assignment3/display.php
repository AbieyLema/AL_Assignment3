<html>

	<head>

        <link rel="stylesheet" href="css/assignment4.css" />
        
        <button type="button" onclick="location.href='index.php'">Main Menu</button>

		<?php

			require("vendorTableData.php");

		?>

		

	</head>

	<body>

		<table>

			<?php

				CreateVendorTableHeader();
				FillVendorTable();

			?>

		</table>

		

	</body>

</html>



