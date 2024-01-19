<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user']))
{
    header("Location:../index.php");
}
include ('../config.php');

$res=mysqli_query($conn,"SELECT * FROM `table_email_ijp` Where exam_name ='MIS-TL-02-08-2023' ");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MIS-QA | XDBS</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous" />
<link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="icon" href="../../assets/favicon.png">
    </head>
    <body class="sb-nav-fixed">
        <?php include('header.php') ?>
        <div id="layoutSidenav">
            <?php include('sidenav.php') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MIS-TL</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">MIS-TL</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
								MIS-TL
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ECN</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
												<th>DOJ</th>
												<th>Designation</th>
												<th>Team Leader</th>
												<th>Exam Name</th>         
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row[ecn];?></td>
                                                <td><?php echo $row[firstname];?></td>
                                                <td><?php echo $row[lastname];?></td>
                                                <td><?php echo $row[doj];?></td>
                                                <td><?php echo $row[designation];?></td>
                                                <td><?php echo $row[teamleader];?></td>
                                                <td><?php echo $row[exam_name];?></td>
                                                
                                                
                                                
												 <!-- <td><?php echo $row[date];?></td> -->
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; XDBS 2023</div>
                            <div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
				$('#example').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						// 'copy', 'csv', 'excel', 'pdf', 'print'
						'csv'
					]
				} );
			} );
        </script>
    </body>
</html>
