<?php


// get the q parameter from URL
$q = $_REQUEST["q"];

include('C:\xampp\htdocs\pharmacy2\config.php');
        $result = mysqli_query($conn, "SELECT * FROM category");

// lookup all hints from array if $q is different from ""



?>
<tbody>
<tr>
                 <?php 
                 $count=1;
                 if ($q !== "") :
                  $q = strtolower($q);
                  $len=strlen($q);
                 
                 while($row = mysqli_fetch_assoc($result)): ?>
                 <?php 
                 if (stristr($q, substr($row['name'], 0, $len))) :


                  ?>
                 <td><?php echo $count ?></td>
                 <td><?php echo $row['name']?></td>
                 <td><?php echo "00".$row['cat_number'] ?></td>
                 <td>
                  <ul class="nav">
                    <li class="nav-item">
                      <button type="button" class="btn" data-toggle="modal" data-target="#myModal"
                      onclick="getUpdate(<?php echo $row['cat_number'] ?>)">
                      <i class='fas fa-sync-alt' style='font-size:24px'></i>
                    </button>
                  </li>
                  <li class="nav-item" style="margin-left: 4px">

                   <a href="deleteCategory.php?num=<?php echo $row['cat_number'] ?>" class="del"> <i class='far fa-trash-alt' style='font-size:24px; color: black'></i></a>


                 </li>
               </ul>
             </td>
           </tr>
           <?php $count++;
           endif;
           endwhile; 
           endif;?>

         </tr>
         </tbody>