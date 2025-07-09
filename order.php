<?php include("include/config.php");?>
<?php 
$q1="select * from `orders`";
$e1=mysqli_query($conn,$q1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>G&P | Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="G&P.jpg" />
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      <?php include("include/header.php");?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include("include/sidebar.php");?>
        <!-- partial -->
        <div class="main-panel">
          <div class="row">
            <div class="col-md-1">
              
            </div>
            <div class="col-md-10">
              <div class="card">
                <!-- <img class="card-img-top" src="holder.js/100x180/" alt=""> -->
                <div class="card-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>SL.no</th>
                            <th>Product Name</th>
                            <th>User Name</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(mysqli_num_rows($e1)==0)
                      {
                    ?>
                        <td colspan="5" class="text-center">No Data Available</td>
                    <?php  
                    }
                      else{
                        $i=1;
                      while($result=mysqli_fetch_row($e1))
                      {
                        $q2="select * from `user` where `id` = '$result[1]'";
                        $e2=mysqli_query($conn,$q2);
                        $result1=mysqli_fetch_row($e2);

                        $q3="select * from `product` where `id` = '$result[2]'";
                        $e3=mysqli_query($conn,$q3);
                        $result2=mysqli_fetch_row($e3)
                      ?>
                        <tr>
                            <td scope="row"><?php echo "$i"; ?></td>
                            <td scope="row"><?php echo "$result2[1]"; ?></td>
                            <td scope="row"><?php echo "$result1[1]"; ?></td>
                            <td><?php echo "$result[3]"; ?></td>
                            <td><a href="osts.php?id1=<?php echo "$result[0]";?>" style="font-size: 18px;" class="<?php if($result[6] == 1){ echo "text-success"; }else{ echo "text-warning"; }?>"><i class="mdi mdi-power"></i></a> | <a href="oview.php?id1=<?php echo "$result[0]";?>" class="text-warning" style="font-size: 18px;"><i class="mdi mdi-eye"></i></a></td>
                        </tr>
                      <?php
                      $i++;
                      }
                    }?>
                    </tbody>
                 </table>
                </div>
              </div>
              
            </div>
            <div class="col-md-1">
              
            </div>
          </div>
         
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Green and Protein Grocer Evolution 2024</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>