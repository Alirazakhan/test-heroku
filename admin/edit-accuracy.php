<?php 
  include '../include/functions.php';
  include '../include/MysqliDb.php';
  include '../include/config.php';

  $page_title=' Edit Accuracy';
  $id=$_REQUEST['id'];

if ( isset($_POST['edit_accuracy']) ) {


  $current_date=date("Y-m-d");
  
  $min_value=$_POST['min_value'];
  $max_value=$_POST['max_value'];
  $accuracy_name=$_POST['accuracy_name'];
  $next_level=$_POST['next_level'];
  
  $AccuracyArray=array( 
                        "min_value"=>$min_value,
                        "max_value"=>$max_value,
                        "accuracy_name"=>$accuracy_name,
                        "next_level"=>$next_level
                      );

  $db->where('id',$id);
  $db->update('tbl_accuracy',$AccuracyArray);

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
            
            
            
            <?php 
            $db->where('id',$id);
            $data=$db->getOne('tbl_accuracy');
            ?>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Define % Accuracy</h4>
                  <form action=""  method="POST" class="form-sample">
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Min. Limit</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="number" name="min_value" value="<?php echo $data['min_value']; ?>">
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Max. Limit</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="number" name="max_value" value="<?php echo $data['max_value']; ?>"> 
                           
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Accuracy Name</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="accuracy_name" value="<?php echo $data['accuracy_name']; ?>"> 
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Next Level</label>
                          <div class="col-sm-9">
                            <select name="next_level" class="form-control" required>
                              <option value="" >Select Level</option>
                              <option value="A1" <?php if($data['accuracy_name'] == 'A1'){ echo "selected"; } ?> >A1</option>
                              <option value="A2" <?php if($data['accuracy_name'] == 'A2'){ echo "selected"; } ?> >A2</option>
                              <option value="B1" <?php if($data['accuracy_name'] == 'B1'){ echo "selected"; } ?>  >B1</option>
                              <option value="B2" <?php if($data['accuracy_name'] == 'B2'){ echo "selected"; } ?> >B2</option>
                              <option value="B2" <?php if($data['accuracy_name'] == 'B2'){ echo "selected"; } ?> >C1</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                      <div class="col-md-12">
                        <div class="text-center">
                          <input class="btn btn-primary" name="edit_accuracy" type="submit" value="Update">
                          
                        </div>
                      </div>
                    </div>
                    
                  </form>
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
  
    

  </body>
</html>