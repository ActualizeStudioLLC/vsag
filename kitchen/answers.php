<?php
		$parLevels1a = $_POST['parLevels1a'];
		$parLevels1b = $_POST['parLevels1b'];
		$shelfLife2a = $_POST['shelfLife2a']; 
		$shelfLife2b = $_POST['shelfLife2b'];
		$masterProduction3a = $_POST['masterProduction3a'];
		$masterProduction3b = $_POST['masterProduction3b'];
		$usagesCalculated4a = $_POST['usagesCalculated4a'];
		$usagesCalculated4b = $_POST['usagesCalculated4b'];
		$laborDivision5a = $_POST['laborDivision5a'];
		$laborDivision5b = $_POST['laborDivision5b'];
		$orderInvoice6a = $_POST['orderInvoice6a'];
		$orderInvoice6b = $_POST['orderInvoice6b'];
		$invoiceCheck7a = $_POST['invoiceCheck7a'];
		$invoiceCheck7b = $_POST['invoiceCheck7b'];
		$productFreshness8a = $_POST['productFreshness8a'];
		$productFreshness8b = $_POST['productFreshness8b'];
		$deliveryTimes9a = $_POST['deliveryTimes9a'];
		$deliveryTimes9b = $_POST['deliveryTimes9b'];
		$scales10a = $_POST['scales10a'];
		$scales10b 	= $_POST['scales10b'];
		
		$notes1 = $_POST['Notes1'];
		$notes1 = $_POST['Notes2'];
		$notes1 = $_POST['Notes3'];
		$notes1 = $_POST['Notes4'];
		$notes1 = $_POST['Notes5'];
		$notes1 = $_POST['Notes6'];
		$notes1 = $_POST['Notes7'];
		$notes1 = $_POST['Notes8'];
		$notes1 = $_POST['Notes9'];
		$notes1 = $_POST['Notes10'];

		$key = 1;
	?>

	<table class="results" style="border: solid black 1px;">
	<tr class="headerRow">
		<td>Order</td>
		<td>Question</td>
		<td>Yes / No</td>
		<td>1 - 5</td>
		<td>Notes</td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Are there Par levels in place?</td>
		<td><?php echo $parLevels1a ?></td>
		<td><?php echo $parLevels1b ?></td>
		<td><?php echo $notes1 ?></td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Do they prep to shelf life?</td>
		<td><?php echo $shelfLife2a ?></td>
		<td><?php echo $shelfLife2b ?></td>
		<td><?php echo $notes2 ?></td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Is there a master production schedule?</td>
		<td><?php echo $masterProduction3a ?></td>
		<td><?php echo $masterProduction3b ?></td>
		<td><?php echo $notes3 ?></td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Are usages calculated weekly?</td>
		<td><?php echo $usagesCalculated4a ?></td>
		<td><?php echo $usagesCalculated4b ?></td>
		<td><?php echo $notes4 ?></td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Is prep made to amount called for in the guide?</td>
		<td><?php echo $laborDivision5a ?></td>
		<td><?php echo $laborDivision5b ?></td>
		<td><?php echo $notes5 ?></td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Is the Order vs. Invoice checked?</td>
		<td><?php echo $orderInvoice6a ?></td>
		<td><?php echo $orderInvoice6b ?></td>
		<td><?php echo $notes6 ?></td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Is the invoice checked against what is delivered?</td>
		<td><?php echo $invoiceCheck7a ?></td>
		<td><?php echo $invoiceCheck7b ?></td>
		<td><?php echo $notes7 ?></td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Is there freshness of the product checked at receiving?</td>
		<td><?php echo $productFreshness8a ?></td>
		<td><?php echo $productFreshness8b ?></td>
		<td><?php echo $notes8 ?></td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Are specific delivery times set?</td>
		<td><?php echo $deliveryTimes9a ?></td>
		<td><?php echo $deliveryTimes9b ?></td>
		<td><?php echo $notes9 ?></td>
	</tr>
	<tr>
		<td><?php echo $key++ ?></td>
		<td>Are there scales in place?</td>
		<td><?php echo $scales10a ?></td>
		<td><?php echo $scales10b ?></td>
		<td><?php echo $notes10 ?></td>
	</tr>