
<?php
$tmp=$_GET['date'];
$tmp1=explode(',', $tmp);
$d1=$tmp1[0];
$d2=$tmp1[1];
 
include('..\pharmacy2\config.php');
$result = mysqli_query($conn, "SELECT * FROM invoice where date  BETWEEN '$d1' AND '$d2'");
?>
 <?php 

               $count=1;
           while($row = mysqli_fetch_assoc($result)){?>

              <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $row['invoice_id']; ?></td>
                <?php 
                $invoice_id=$row['invoice_id'];
                $result1 = mysqli_query($conn, "SELECT * FROM invoice_item where invoice_id='$invoice_id'");
                $m_name_ar=[];
                $i=0;
               while($row1 = mysqli_fetch_assoc($result1)){
                $medicineid=$row1['medicine_id'];
                $result2 = mysqli_query($conn, "SELECT * FROM medicine where id='$medicineid'");
                $row2 = mysqli_fetch_assoc($result2);
$m_name_ar[$i]=$row2['name'];
$i++;
               }
               $t=array_unique($m_name_ar);
               $mname= implode(",",$t);

                 ?>
                <td><?php echo $mname; ?></td>
                <td><?php echo $row['amount'].' KS'; ?></td>
                
                <td><?php echo  date_format(date_create(  $row['date']),"d.m.Y"); ?></td>
                <td>
                  <div class="text-center">
                    <a class="btn-floating btn-lg btn-tw" type="button" role="button"  data-toggle="modal" data-target="#myModaltable" onclick="invoicemodal( '<?php echo $row['invoice_id'] ?>')"><i class="fa fa-info-circle" style="font-size: 24px"></i></a>

                  </div>
                
               
                </td>
                

           </tr>
           <?php 
           $count++;
         } ?>