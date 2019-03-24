
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
					
                </div>
				
				
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
							<h4 class = "alert alert-success">Canvassing Report</h4>	
                        </div>
						
					<br/>
                       <form method="post" action="sort.php">
			
			<select name="block" id="position" class = "form-control pull-left" style = "width:300px;margin-left:19px; ">
				<option readonly>----Sort by Block---</option>
				<option>A_block</option>
				<option>B_block</option>
				<option>C_block</option>
				<option>D_block</option>
				<option>E_block</option>
				<option>F_block</option>
				<option>G_block</option>
				<option>J_block</option>
				<option>H_block</option>
				<option>K_block</option>
				<option>L_block</option>
				<option>Q_block</option>

				
			</select>
			
			&nbsp;
			&nbsp;
			<button id ="sort" class = "btn btn-success">Sort</button><button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
</form>	
                        <div class="panel-body">
                            
						
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for A Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'A_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>	
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for B Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'B_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>		
			
						
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for C Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'C_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for D Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'D_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>	
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for E Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'E_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>		
			
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for F Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'F_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>	
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for G Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'G_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>		
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for J Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'J_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>	

				
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for H Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'H_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>					
			
			
			

				
            <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for K Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'K_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>	
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for L Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'L_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>	
            
           <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Campaign for Q Block</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Need</td>
                        <td class = "alert alert-success">Rank</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM campaign WHERE block = 'Q_block'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['campaign_id'];
			$query1 = $conn->query("SELECT need , rank FROM campaign WHERE campaign_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['need'];?></button>	</td>
                        <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['rank'];?></button>	</td>

					<?php }?>
					</tbody>
					
					
			</table>	
			
			
			
			
			
			
			
			
							</div>				
				
							
							
							
							
							
                          </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

