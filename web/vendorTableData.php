<?php

	include("connection.php");

	function FillVendorTable()
	{

		$tableBodyText = "";

		$connection = ConnectToDatabase();

		$querySelect = "SELECT VendorNo,VendorName FROM Vendors";
		$preparedQuerySelect = $connection -> prepare($querySelect);
		$preparedQuerySelect -> execute();

		while ($row = $preparedQuerySelect -> fetch())
		{

			$vendorNo = number_format($row['VendorNo'],0);
			$vendorName = $row['VendorName'];

			$tableBodyText .= "<tr>";
			$tableBodyText .= "<td>$vendorNo</td>";
			$tableBodyText .= "<td class='text'>$vendorName</td>";
			$tableBodyText .= "</tr>";

		}

		echo $tableBodyText;

	}


	function CreateVendorTableHeader()
	{

		$text = "<tr id='tableHeader'>";
		$text .= "<th>VendorNo</th>";
		$text .= "<th>VendorName</th>";
		$text .= "</tr>";

		echo $text;

	}

?>



