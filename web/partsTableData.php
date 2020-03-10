<?php

	include("connection.php");

	function FillPartsTable()
	{

		$tableBodyText = "";

		$connection = ConnectToDatabase();

		$querySelect = "SELECT VendorNo,Descriptions FROM Parts";
		$preparedQuerySelect = $connection -> prepare($querySelect);
		$preparedQuerySelect -> execute();

		while ($row = $preparedQuerySelect -> fetch())
		{

			$vendorNo = number_format($row['VendorNo'],0);
			$vendorName = $row['Descriptions'];

			$tableBodyText .= "<tr>";
			$tableBodyText .= "<td>$vendorNo</td>";
			$tableBodyText .= "<td class='text'>$Descriptions</td>";
			$tableBodyText .= "</tr>";

		}

		echo $tableBodyText;

	}


	function PartsTableHeader()
	{

		$text = "<tr id='tableHeader'>";
		$text .= "<th>VendorNo</th>";
		$text .= "<th>Description</th>";
		$text .= "</tr>";

		echo $text;

	}

?>



