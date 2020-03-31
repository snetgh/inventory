
<?php  require_once 'db.php'; 



if (isset($_GET['i'])) {
$secret_id = $_GET['i'];
}else{
    echo '<script>window.location.href="add-report.php"</script>';
}

$get_report_details = mysqli_query($connectionString,"SELECT * FROM reports WHERE secret_id = '$secret_id' LIMIT 1")or die(mysqli_error($connectionString));

$get_details = mysqli_fetch_array($get_report_details);

$to = $get_details['report_to'];
$from = $get_details['report_from'];
$date = $get_details['report_date'];
$subject = $get_details['report_subject'];
$title = $get_details['report_title'];







 ?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Print Report</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
         <link rel="shortcut icon" href="assets/images/logo.jpeg">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

             <!-- alertifyjs Css -->
        <link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

        <!-- alertifyjs default themes  Css -->
        <link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

           <?php  require_once 'sidebar.php';  ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                               <!--  <div class="col-md-8">
                                    <h4 class="page-title mb-1">Form Elements</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Elements</li>
                                    </ol>
                                </div> -->
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <!-- <div class="dropdown">
                                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">

                             <div class="row justify-content-center">
                                <div class="col-xl-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Print Report</h4>

 <form id="add-report" method="POST">
  <div class="row">
            <div class="col-xs-12 col-md-12">
                <div>
                    <h2 class="text-center">Report</h2>
                </div>
            </div>
           
            <div class="col-xs-12 col-md-12">
                
                    <input type="hidden" name="secret_id" value="<?php echo mt_rand(100000,9999999)  ?>" >
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <address>
                            <strong>To :</strong>
                            <span><?php echo $to; ?></span>
                        </address>
                         <address>
                            <strong>From :</strong>
                            <span><?php echo $from; ?></span>
                           
                        </address>
                         <address>
                           <strong>Date :</strong>
                            <span><?php echo $date; ?></span>
                            
                        </address>
                         <address>
                            <strong>Subject :</strong>
                            <span><?php echo $subject; ?></span>
                        </address>
                    </div>
                    
                </div>
                
            </div>
        </div>

        <hr style="border-bottom: 2px solid #717171">

	<div class="row justify-content-center">
    <div class="col-md-12 text-center">
    <h4 class="font-weight-bold"><?php  echo $title;  ?></h4>
    </div>
    </div>
        

  

        <div class="row clearfix">
    <div class="col-md-12"> 
    </div>
  </div>

                                             <div class="row clearfix">
    <div class="col-md-12 mt-4">
      <table class="table table-bordered table-hover" id="customFields">
        <thead>
          <tr>
            <th class="text-center">&nbsp;</th>
            <th class="text-center"> Performance </th>
            <th class="text-center"> Downtime </th>
            <th class="text-center"> Cause </th>
            <th class="text-center"> Solution </th>
          </tr>
        </thead>
        <tbody>
         <?php   

         $get_report_info = mysqli_query($connectionString,"SELECT * FROM reports WHERE secret_id = '$secret_id'")or die(mysqli_error($connectionString));

         while ($each_item = mysqli_fetch_array($get_report_info)) {
             
             $item_name = $each_item['report_item'];
             $item_performance = $each_item['performance'];
             $item_downtime = $each_item['downtime'];
             $item_cause = $each_item['cause'];
             $item_solution = $each_item['solution'];


             ?>

    <tr>

        <td><textarea readonly="require_once" style="border: none;overflow: hidden;" rows="5"><?php echo $item_name;  ?></textarea> </td>
        <td><textarea readonly="require_once" style="border: none;overflow: hidden;" rows="5"><?php echo $item_performance;  ?></textarea> </td>
        <td><textarea readonly="require_once" style="border: none;overflow: hidden;" rows="5"><?php echo $item_downtime;  ?></textarea> </td>
        <td><textarea readonly="require_once" style="border: none;overflow: hidden;" rows="5"><?php echo $item_cause;  ?></textarea> </td>
        <td><textarea readonly="require_once" style="border: none;overflow: hidden;" rows="5"><?php echo $item_solution;  ?></textarea> </td>
    </tr>


     <?php    }?>
        
        </tbody>
      </table>
     

      <button id="printpagebutton" class="btn btn-outline-primary mt-5" onclick="printpage()">Print Report</button>
    </div>
  </div>
  
  </form>
                                           
                                          
                                        </div>
                                    </div>
                                </div>
                                
                            </div>







                        </div>
                        <!-- end container-fluid -->
                    </div> 
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2020 © Step Network.
                            </div>
                           
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
     
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

          <!-- alertifyjs js -->
        <script src="assets/libs/alertifyjs/build/alertify.min.js"></script>

        <script src="assets/js/pages/alertifyjs.init.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>


        <script src="assets/js/app.js"></script>

        <script type="text/javascript">
            
             function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }

        </script>

       

    </body>
</html>
