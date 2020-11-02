<?php 
  include '../include/functions.php';
  include '../include/MysqliDb.php';
  include '../include/config.php';

  $page_title=' All Questions';

  if ( isset($_REQUEST['del_id']) ) {
    $del_id= $_REQUEST['del_id'];
    $db->where('id',$del_id);
    $db->delete('tbl_questions');
    header("LOCATION:questions-list.php");
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
          <div class="card">
            <div class="card-body">
              <div class="row" style="padding: 13px 0px;">
                
                
              </div>
              <h4 class="card-title">All Questions</h4>
              <div class="row">
                <div class="col-12">
                <?php
                  $met_data=$db->get('tbl_questions');
                ?>
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Question Name</th>
                            <th>Level</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1;
                        foreach($met_data as $sup_da){
                          

                         ?>

                          <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $sup_da['question']; ?></td>
                            <td><?php echo $sup_da['level']; ?></td>
                            
                            
                            <td>
                              
                              
                              <a onclick="DeleteQuestion('<?php echo $sup_da['id']; ?>')" class="btn btn-outline-danger">Delete</a>
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
    function DeleteQuestion(id){
      var r= confirm('Are You Sure To Delete This Question?');
      if ( r == true) {
        window.location = "questions-list.php?del_id="+id; 
      }

    }
  </script>


  </body>
</html>