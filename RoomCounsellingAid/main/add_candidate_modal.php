<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Add Candidate</center>
						</div>    
					</div>
				</h4>
			</div>
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<div class="form-group">
						<label>BlOCKS</label>
						<select class = "form-control" name = "block">
								<option></option>
								<option>A_block</option>
								<option>B_block </option>
								<option>C_block </option>
								<option>D_block</option>
								<option>E_block</option>
								<option>F_block</option>
								<option>G_block </option>
								<option>H_block</option>
								<option>J_block</option>
								<option>K_block</option>
								<option>L_block</option>
                                <option>Q_block</option>
							</select>
					</div>
                    <div class="form-group">
						<label>ROOM TYPE</label>
						<select class = "form-control" name = "roomtype">
								<option></option>
								<option>1_Bed</option>
								<option>2_Bed</option>
								<option>3_Bed</option>
								<option>4_Bed</option>
								<option>6_Bed</option>
							</select>
					</div>
                    <div class="form-group">
						<label>AC/NONAC</label>
						<select class = "form-control" name = "acnonac">
								<option></option>
								<option>AC</option>
								<option>NONAC</option>
							</select>
					</div>
                    <div class="form-group">
						<label>NCGPA RANKING</label>
							<input class="form-control" type ="text" name = "rank" placeholder="Please enter ncgpa rank" required="true">
					</div>
			
					<div class="form-group">
						<label>Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter firstname" required="true">
					</div>
					<div class="form-group">
						<label>Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
					</div>
											
					<div class="form-group">
						<label>Year_Level</label>
							<select class = "form-control" name = "year_level">
								<option></option>
								<option>1st Year</option>
								<option>2nd Year</option>
								<option>3rd Year</option>
								<option>4th Year</option>
							</select>
					</div>
                    <div class="form-group">
						<label>Group</label>
							<select class = "form-control" name = "group">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
					</div>
                    <div class="form-group">
						<label>NEED</label>
						<select class = "form-control" name = "need">
								<option></option>
								<option>dummyneed1</option>
								<option>dummyneed2</option>
								<option>dummyneed3</option>
								<option>dummyneed4</option>
								<option>dummyneed5</option>
							</select>
					</div>
					<div class="form-group">
                        <label>Image</label>
						<input type="file" name="image" > 
                    </div>
						<button name = "save" type="submit" class="btn btn-primary">Save Data</button>
				</form>  
			</div>						
            
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
										
            <?php 
										
								require_once 'dbcon.php';
								if (isset($_POST['save'])){
								
								$firstname=$_POST['firstname'];
                                $lastname=$_POST['lastname'];
                                $year_level=$_POST['year_level'];
                                $group=$_POST['group'];
                                $block=$_POST['block'];
                                $roomtype=$_POST['roomtype'];
                                $acnonac=$_POST['acnonac'];
                                $rank=$_POST['rank'];
                                $need=$_POST['need'];
								$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name= addslashes($_FILES['image']['name']);
                                $image_size= getimagesize($_FILES['image']['tmp_name']);
                                move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);
                                $location="upload/" . $_FILES["image"]["name"];
						
		
		
								$query = $conn->query("SELECT * FROM campaign WHERE rank='$rank'") or die (mysql_error());
								$count1 = $query->num_rows;

								if ($count1  > 0){ 
							?>
										<script>
											alert("campaign Already Exist");
										</script>
							<?php
								}
								else{
									$conn->query("INSERT INTO `campaign`  SET `firstname`='{$firstname}',`lastname`='{$lastname}',`year_level`='{$year_level}',`group`='{$group}',`block`='{$block}',`roomtype`='{$roomtype}',`acnonac`='{$acnonac}',`rank`='{$rank}',`need`='{$need}',`img`='{$location}' ");
									header('location:candidate.php');
							?>
									<script>
										alert('User Data successfully Save');
									</script>
							<?php 
									}
								} 
							?>
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>