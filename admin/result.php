<?php 
  include '../include/functions.php';
  include '../include/MysqliDb.php';
  include '../include/config.php';

$page_title=' Add Question';

if ( isset($_POST['add_question']) ) {

  
  $total_result=$_POST['total_result'];
  $data=GetResult($total_result,$db);
  $score=$data['score'];
  $next=$data['next'];
  $msg=$data['msg'];
  
} else{

  $next='A1';
  $score=0;
  $msg='';

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

              <?php
              if($msg != ''){ ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $msg; ?></strong> Total Score : <?php echo $score; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>



                <?php

              } 

              ?>



              <form action=""  method="POST" class="form-sample">

                <input style="display: none;"  type="number" name="total_result" class="total-points" value="<?php echo $score; ?>">

              <?php
              $i=1;
              $db->where('level',$next);
              $questions=$db->get('tbl_questions'); 
              foreach($questions as $data){ ?>

              <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <div class="row">
                      <div  class="col-md-12">
                       
                        <div class="text-center">
                          <h5 class="text-danger"> Questions No # <?php echo $i; ?></h5>
                        </div>
                        
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <h4><?php echo $data['question']; ?> </h4>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                      <div class="col-md-6">
                        <div class="form-group row">

                          
                         

                          <input onchange="OptionAction(this)" type="radio"  data-option="A" value="<?php echo $data['option_a']; ?>" data-meta="<?php echo $data['id']; ?>" data-answer="<?php echo $data['ans_key']; ?>"  name="radio<?php echo $data['id']; ?>" >
                          <h6><?php echo $data['option_a']; ?> </h6>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">

                         <input onchange="OptionAction(this)" type="radio" data-option="B" data-meta="<?php echo $data['id']; ?>" data-answer="<?php echo $data['ans_key']; ?>" value="<?php echo $data['option_b']; ?>"  name="radio<?php echo $data['id']; ?>" >
                          <h6><?php echo $data['option_b']; ?></h6>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <input onchange="OptionAction(this)" type="radio"  data-option="C" data-meta="<?php echo $data['id']; ?>" data-answer="<?php echo $data['ans_key']; ?>"  value="<?php echo $data['option_c']; ?>" name="radio<?php echo $data['id']; ?>" >
                          <h6><?php echo $data['option_c']; ?></h6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">

                          <input onchange="OptionAction(this)" type="radio"  data-option="D" data-meta="<?php echo $data['id']; ?>" data-answer="<?php echo $data['ans_key']; ?>" value="<?php echo $data['option_d']; ?>"  name="radio<?php echo $data['id']; ?>" >

                          <h6><?php echo $data['option_d']; ?> </h6>
                        </div>
                      </div>
                    </div>
                    <input style="display: none;"  type="number" class="result-all" value="0"  id="question_result<?php echo $data['id']; ?>">
                </div>
              </div>
              <?php
              $i++;
              }
              ?>

              <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                  <div class="text-center">
                    <input class="btn btn-success" name="add_question" type="submit" value="Submit">
                    
                  </div>
                </div>
              </div>
            </form>
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

      function OptionAction(e){
        
        

        var option_value=$(e).attr('data-option');
        var meta_id=$(e).attr('data-meta');
        var answer_value=$(e).attr('data-answer');
        
        
        if (option_value == answer_value ) {
          $('#question_result'+meta_id+'').val(1);
        } else{
          $('#question_result'+meta_id+'').val(0);
        }

        GetAllResult();

      }

      function GetAllResult(){
        var total_point_update=0;
        $(".result-all").each(function(){
                total_point_update += + parseInt($(this).val());
        });

        $(".total-points").val(total_point_update);

      }
    </script>
  
    

  </body>
</html>