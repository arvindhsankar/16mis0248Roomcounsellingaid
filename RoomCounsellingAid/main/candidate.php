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
                    <h3 class="page-header"></h3>
					
                </div>
				
                <!-- /.col-lg-12 -->
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														Campaign List
													</div>    
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Year Level</th>
                                            <th>Group</th>
                                            <th>Block</th>
                                            <th>Room_type</th>
                                            <th>AC/NON-AC</th>
                                            <th>Rank</th>
                                            <th>Need</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
										<?php 
											require 'dbcon.php';
											$bool = false;
											$query = $conn->query("SELECT * FROM campaign ORDER BY campaign_id DESC");
												while($row = $query->fetch_array()){
													$candidate_id=$row['campaign_id'];
										?>
											
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['year_level'];?></td>
                                            <td><?php echo $row ['group'];?></td>
                                            <td><?php echo $row ['block'];?></td>
                                            <td><?php echo $row ['roomtype'];?></td>
                                            <td><?php echo $row ['acnonac'];?></td>
                                            <td><?php echo $row ['rank'];?></td>
                                            <td><?php echo $row ['need'];?></td>
                                            <td width="50"><img src="<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>
                                            
                                            <td style="text-align:center">
											

												    <a href="chatindex.html"><i class = "fa fa-pencil"></i> Chat </a>

                                                 	
												
												
											</td>
														
											   
											
														
											    
                                        </tr>
										
                                       <?php } ?>
                    
												
                                    </tbody>
                                </table>
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

