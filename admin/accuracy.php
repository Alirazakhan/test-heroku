<?php 
  include '../include/functions.php';
  include '../include/MysqliDb.php';
  include '../include/config.php';

  $page_title='Set Accuracy';

  if ( isset($_REQUEST['del_id']) ) {
    $del_id= $_REQUEST['del_id'];
    $db->where('id',$del_id);
    $db->delete('tbl_accuracy');
    header("LOCATION:accuracy.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $page_title; ?></title>
    <?php include '../include/auth.php'; ?>
    <?php include '../partials/libs.php'; ?>

  </head>
  <body>
    <div class="container-scroller">
     <?php include '../partials/nav.php'; ?>
      <div class="container-fluid page-body-wrapper">
        <?php include '../partials/sidebar.php'; ?>
      <div class="main-panel" style="width: 100%;">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-4">
              <a href="add-accuracy.php" class="btn btn-dark"> Define   % With Accuracy</a>
            </div>
            
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row" style="padding: 13px 0px;">
                
                
              </div>
              <h4 class="card-title">All Defined Accuracy </h4>
              <div class="row">
                <div class="col-12">
                <?php
                  $db->orderBy("id","Desc");
                  $AccData=$db->get('tbl_accuracy');
                ?>
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Accuracy Name</th>
                            <th>MIN. Value</th>
                            <th>MAX. Value</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1;
                        foreach($AccData as $da){
                          

                         ?>

                          <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $da['accuracy_name']; ?></td>
                            <td><?php echo $da['min_value']; ?></td>
                            <td><?php echo $da['max_value']; ?></td>
                            
                            
                            <td>
                              
                              <a href="edit-accuracy.php?id=<?php echo $da['id']; ?>" class="btn btn-outline-warning">Edit</a>
                              <a onclick="DeleteAccuracy('<?php echo $da['id']; ?>')" class="btn btn-outline-danger">Delete</a>
                            </td>
                          </tr>


                          <?php
                          $i++;
                        }


                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <?php include '../partials/footer.php'; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      
        

        

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  <?php include '../partials/js_libs.php'; ?>
  <script>
    function DeleteAccuracy(id){
      var r= confirm('Are You Sure To Delete This Defined Accuracy?');
      if ( r == true) {
        window.location = "accuracy.php?del_id="+id; 
      }

    }
  </script>


  </body>
</html>