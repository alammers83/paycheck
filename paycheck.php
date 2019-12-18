!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Pay Check</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Paycheck Calculator</h1>
    
	
<?php


{
  // Store the input form data in variables
  $firstName = 'Jane';
  $lastName = 'Doe';
  $hoursWorked = (int) 40;
  $overtimeHours = (int) 10;
  $hourlyRate= (float) 20;
  $FICA = (float) 5.65;
  $stateTax = (float) 5.75;
  $fedTax = (float) 28;

  //calculate the output
  $regPay = $hoursWorked * $hourlyRate;
  $overtimePay = $overtimeHours * $hourlyRate * 1.5;
  $grossPay = $regPay + $overtimePay;
  $stateWithheld = $stateTax * $grossPay * 0.01;
  $fedWithheld = $fedTax * $grossPay * 0.01;
  $FICAwithheld = $FICA * $grossPay * 0.01;
  $totalTax = $FICAwithheld + $stateWithheld + $fedWithheld;
  $netPay = $grossPay - $totalTax;
  $formattedName = $firstName . ' ' . $lastName ;

  //format the numbers
  $hourlyRate = number_format($hourlyRate, 2);
  $regPay = number_format($regPay, 2);
  $overtimePay = number_format($overtimePay, 2);
  $grossPay = number_format($grossPay, 2);
  $FICA = number_format($FICA, 2);
  $FICAwithheld = number_format($FICAwithheld, 2);
  $stateTax = number_format($stateTax, 2);
  $stateWithheld = number_format($stateWithheld, 2);
  $fedTax = number_format($fedTax, 2);
  $fedWithheld = number_format($fedWithheld, 2);
  $totalTax = number_format($totalTax, 2);
  $netPay = number_format($netPay, 2);

	// Display the table using heredoc
	echo <<<EndOfTable
<table id="paycheck">
<tr>
  <th colspan="3">Paycheck Calculator</th>
</tr>
<tr>
<td>Employee Name</td>
<td>{$formattedName}</td>
</tr>
<tr class="alt">
<td>Regular Hours Worked (between 0 and 40)</td>
<td>{$hoursWorked}</td>
</tr>
<tr>
<td>Overtime Hours Worked (between 0 and 40)</td>
<td>{$overtimeHours}</td>
</tr>
<tr class="alt">
<td>Hourly Rate (between 0 and 99.99)</td>
<td>\${$hourlyRate}</td>
</tr>
<tr>
<td>Regular Pay</td>
<td>\${$regPay}</td>
</tr>
<tr class="alt">
<td>Overtime Pay</td>
<td>\${$overtimePay}</td>
</tr>
<tr>
<td>Gross Pay</td>
<td>\${$grossPay}</td>
</tr>
<tr class="alt">
<td>FICA Tax Rate (ex. 5.65)</td>
<td>{$FICA}%</td>
</tr>
<tr>
<td>FICA Taxes Withheld</td>
<td>\${$FICAwithheld}</td>
</tr>
<tr class="alt">
<td>State Tax Rate (ex. 5.75)</td>
<td>{$stateTax}%</td>
</tr>
<tr>
<td>State Taxes Withheld</td>
<td>\${$stateWithheld}</td>
</tr>
<tr class="alt">
<td>Federal Tax Rate (ex. 28.00)</td>
<td>{$fedTax}%</td>
</tr>
<tr>
<td>Federal Taxes Withheld</td>
<td>\${$fedWithheld}</td>
</tr>
<tr class="alt">
<td>Total Taxes</td>
<td>\${$totalTax}</td>
</tr>
<tr>
<td>Net Pay</td>
<td>\${$netPay}</td>
</tr>
</table>
EndOfTable;
}
?>
	
</body>
</html>
