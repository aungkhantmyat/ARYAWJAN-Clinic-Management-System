<?php
include("connect.php"); 
$id=$_GET['id'];

$res="SELECT * FROM staff WHERE Staff_Id='$id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);

?>




<form action="update.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" value="<?php echo $row['Name']?>" name="name">
                </div>

                <div class="form-group">
                  <label for="birthdate">Birthdate:</label>
                  <input type="text" class="form-control" id="birthdate" value="<?php echo $row['Birthdate']?>" name="birthdate">
                </div>

                

                <div class="form-group">
                  <label for="nrc">NRC:</label>
                  <input type="text" class="form-control" id="nrc" value="<?php echo $row['NRC']?>" name="nrc">
                </div>

                <div class="form-group">
                  <label for="gender">Gender</label>
							<?php $gender=$row['Gender'];
									if($gender=="male"):
							 ?>
							<input type="radio" name="gender" value="male" checked> Male

							<input type="radio" name="gender" value="female"> Female <br>
							<?php elseif ($gender=="female"):?>
								<input type="radio" name="gender" value="male" > Male

							<input type="radio" name="gender" value="female" checked> Female <br>
						<?php endif; ?>
                </div>

                <div class="form-group">
                  <label for="address">Address:</label>
                  <textarea class="form-control" id="address" value="<?php echo $row['Address']?>" name="address" >
                  	<?php echo $row['Address']?>
                  </textarea>
                </div>


                

              </div>
              
              <div class="col-sm">
                <div class="form-group">
                  <label for="phone">Phone:</label>
                  <input type="text" class="form-control" id="phone" value="<?php echo $row['Phone']?>" name="phone">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control" id="email" value="<?php echo $row['Email']?>" name="email">
                </div>

                

                <div class="form-group">
                  <label for="rank">Rank:</label>
                  <input type="text" class="form-control" id="rank" value="<?php echo $row['Rank']?>" name="rank">
                </div>

                <div class="form-group">
                  <label for="education">Education:</label>
                  <textarea class="form-control" id="education" value="<?php echo $row['Education']?>" name="education" >
                  	<?php echo $row['Education']?>
                  </textarea>
                </div>

                <div class="form-group">
                  <label for="certification">Certification:</label>
                  <textarea class="form-control" id="certification" value="<?php echo $row['Certification']?>" name="certification" >
                  	<?php echo $row['Certification']?>
                  </textarea>
                </div>
                
              </div>



              <div class="col-sm">
                
                <div class="form-group">
                  <label for="salary">Salary:</label>
                  <input type="text" class="form-control" id="salary" value="<?php echo $row['Salary']?>" name="salary">
                </div>

                <div class="form-group">
                <label for="department">Department:</label>
                 <select name="department" id="department">
								<option value="0"><?php echo $row['Department']; ?></option>
								<option value="Heart">Heart</option>
								<option value="Brain">Brain</option>
								<option value="Cancer">Cancer</option>
							</select>
                </div>

                

                  <div class="form-group">
                    <label for="photo">Photo:</label>

         <div class="custom-file mb-3">

          <input type="file" class="custom-file-input" id="photo" name="photo">
          <label class="custom-file-label" for="photo">Choose Profile Photo:</label>
        </div>
      </div>
                
              </div>
           
            </div>
            <input type="hidden" name="id" value="<?php echo $row['Staff_Id']?>">
            <input type="hidden" name="type" value="<?php echo $row['Type']; ?>">

            <button type="submit" class="btn btn-success">Submit</button>
          </form>