<?php 
  include '../include/functions.php';
  include '../include/MysqliDb.php';
  include '../include/config.php';

$page_title=' Add Question';

if ( isset($_POST['add_question']) ) {


  $current_date=date("Y-m-d");
  
  $question=$_POST['question'];
  $question_level=$_POST['question_level'];
  
  
 
  
  $option_a=$_POST['option_a'];
  $option_b=$_POST['option_b'];
  $option_c=$_POST['option_c'];
  $option_d=$_POST['option_d'];
  $answer=$_POST['answer'];
  


  $QuestionArray=array( 
                        "question"=>$question,
                        "level"=>$question_level,
                        "option_a"=>$option_a,
                        "option_b"=>$option_b,
                        "option_c"=>$option_c,
                        "option_d"=>$option_d,
                        "ans_key"=>$answer
                      );


  $db->insert('tbl_questions',$QuestionArray);

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
          <div class="row">
            
            
            
            
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Question</h4>
                  <form action=""  method="POST" class="form-sample">
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Question</label>
                          <div class="col-sm-9">
                            <textarea rows="6" name="question" class="form-control"  required></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Question Level</label>
                          <div class="col-sm-9">
                            <select name="question_level" class="form-control" required>
                              <option value="" >Select Level</option>
                              <option value="A1" >A1</option>
                              <option value="A2" >A2</option>
                              <option value="B1" >B1</option>
                              <option value="B2" >B2</option>
                              <option value="B2" >C1</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="row" style="margin-top: 20px;">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">OPTION A</label>
                          <div class="col-sm-9">
                            <input type="text" name="option_a" class="form-control"  required />
                            <input type="radio" name="answer" value="A" required><label >Correct</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">OPTION B</label>
                          <div class="col-sm-9">
                            <input type="text" name="option_b" class="form-control"  required />
                            <input type="radio" name="answer" value="B" required ><label >Correct</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row" style="margin-top: 20px;">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">OPTION C</label>
                          <div class="col-sm-9">
                            <input type="text" name="option_c" class="form-control"  required />
                            <input type="radio" name="answer" value="C" required ><label>Correct</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">OPTION D</label>
                          <div class="col-sm-9">
                            <input type="text" name="option_d" class="form-control"  required />
                            <input type="radio" name="answer" value="D" required><label>Correct</label>
                          </div>
                        </div>
                      </div>
                    </div>
                   

                    

    

    <div class="row" style="margin-top: 30px;">
      <div class="col-md-12">
        <div class="text-center">
          <input class="btn btn-primary" name="add_question" type="submit" value="Add">
          
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