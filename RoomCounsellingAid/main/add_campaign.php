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
                    <h3 class="page-header">START CAMPAIGN</h3>
					
                </div>
				
				<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Details</button>
				<?php include ('add_candidate_modal.php');?>
                <!-- /.col-lg-12 -->
				
				
				<hr/>
				
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

