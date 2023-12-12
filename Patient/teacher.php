
<?php 
include('connect.php');
function resetCounter( &$c ) {
$c = 0;
}
$counter = 0;
$counter++;
$counter++;
$counter++;
echo "$counter <br/>"; // Displays “3”
resetCounter( $counter );
echo "$counter <br/>"; // Displays “0”
$myNumber = 5;
function & getMyNumber() {
global $myNumber;
return $myNumber;
}
$numberRef = &getMyNumber();
$numberRef++;
echo "$myNumber = $myNumber <br/>"; // Displays “6”
echo "$numberRef = $numberRef <br/> "; // Displays “6” 
 $res1="SELECT count(*) FROM staff WHERE staff_id='111'";
$result1=mysqli_query($conn,$res1);
$row1=mysqli_fetch_assoc($result1);
print_r($row1);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table>
 	<tr>
 		
 	<?php $iterations = 10; function fibonacci( $n ) { if ( ( $n == 0 ) || ( $n == 1 ) ) return $n; return fibonacci( $n-2 ) + fibonacci( $n-1 ); } for ( $i=0; $i <= $iterations; $i++ ) { ?> <tr<?php if ( $i % 2 != 0 ) echo ‗ class=‖alt‖‘ ?>> <td>F<sub><?php echo $i?></sub></td> <td><?php echo fibonacci( $i )?></td> </tr> <?php } ?> </table> </body> </html> 
 </body>
 </html>