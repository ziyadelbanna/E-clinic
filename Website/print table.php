<?php 
if($table_size>0){
	
  print "<tr><td><strong>Index</strong></td>";
  echo"      ";
  print "<td><strong>Time</strong></td>";
  echo"      ";
  print "<td><strong>First Name</strong></td>";
  echo"      ";
  print "<td><strong>History</strong></td>";
  echo"      ";
  print "<td><strong>Status</strong></td>";
  echo"      ";
  print "<td><strong>Appointment</strong></td>";
  echo"      ";
  print "<td><strong>E_mail</strong></td></tr>";

$steps = 0;
$tmp = null;
do{
	$steps = 0;
	for($y=0 ; $y<($table_size-1) ; $y++){
		if($final_table[$y]['time']>$final_table[$y+1]['time']){
			$tmp = $final_table[$y];
			$final_table[$y] = $final_table[$y+1];
			$final_table[$y+1] = $tmp;
			$steps++;
		}
	}

}while($steps>0);


for($table_printer=0 ; $table_printer < $table_size ;$table_printer++){
      $row = $final_table[$table_printer];
	  $p_id = $table_printer+1;
	  $time = $row['time'];
	  $firstname = $row['firstname'];
	  $history = $row['history'];
	  $status = $row['status'];
	  $appointment = $row['appointment'];
	  $email = $row['email'];
	  if($row['emergency'] == 1){
                  $condition = "danger" ;
                  }
                  else{
                   $condition = "" ;     
                  }
	  
	  print "<tr  class =\"$condition\"><td>$p_id</td>";
	  print "<td>$time</td>";
	  print "<td>$firstname</td>";	  
	  print "<td>$history</td>";  
	  print "<td>$status</td>";	  
	  print "<td>$appointment</td>";	  
	  print "<td>$email</td></tr>";
	  		 
}
}
?>