<?php
   
    include '../include/functions.php';
    include '../include/MysqliDb.php';
    include '../include/config.php';
    ?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <?php include '../partials/libs.php'; ?>
    <?php include '../include/auth.php'; ?>

    
  </head>
<style>
  .attend{
      background-color: #6da252;
      color:white;
    }
  .not-attend{
    background-color: yellow;

    }
  @media only screen and (min-width: 320px) and (max-width: 480px){
    .col4{
    padding-right: 15px!important;
  }
  .col8{
    padding-left: 15px!important;
  }
  }
  .col4{
    padding-right: 0px;
  }
  .col8{
    padding-left: 0px;
  }
    .set-card-body{
          padding-left: 5px!important;
          padding-right: 5px!important;
          padding-top: 20px!important;
          padding-bottom: 20px!important
    }
    .set-outer{
      padding: 10px;
      background: white;
      border-radius: 6px;
    }
    .search-btn{
      background: #6da252;
      border-color: #6da25200;
      box-shadow: 0 2px 2px 0 rgb(193, 193, 193), 0 3px 1px -2px rgb(241, 241, 241), 0 1px 5px 0 rgb(193, 193, 193);
    }
    .card{
      background-color: #f9fafc;
    }
    .income-box{
      height: 100%;
      background: linear-gradient(87deg, #328aef 0, #66e8ff 100%) !important;
      text-align: center;
      font-size: 73px;
      color: white;
      border-radius: 5px;
    }
    .expenses-box{
      height: 100%;
      background: linear-gradient(87deg, #ef3232 0, #ff7d66 100%) !important;
      text-align: center;
      font-size: 73px;
      color: white;
      border-radius: 5px;
    }
    .profit-box{
      height: 100%;
      background: linear-gradient(87deg, #6da252 0, #b8d3a9 100%) !important;
      text-align: center;
      font-size: 73px;
      color: white;
      border-radius: 5px;
    }
    .customers-box{
      height: 100%;
      background: linear-gradient(87deg, #f6b200 0, #fcce5e87 100%) !important;
      text-align: center;
      font-size: 73px;
      color: white;
      border-radius: 5px;
    }
    .employees-box{
      height: 100%;
      background: linear-gradient(87deg, #58aaaf 0, #82e1a1 100%) !important;
      text-align: center;
      font-size: 73px;
      color: white;
      border-radius: 5px;
    }
    .card .card-title{
      font-size: 16px!important;
      color: black!important;
    }
    .rupe-set{
      font-size: 16px!important
    }
    .form-group{
      margin-bottom: 0.5rem;
    }
    .grid-margin{
        margin-bottom: 0.6rem;
    }
</style>
  <body>
    <div class="container-scroller">
     
 <?php include '../partials/nav.php'; ?>
 
     
      <div class="container-fluid page-body-wrapper">
        
        <?php include '../partials/sidebar.php'; ?>
       
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="set-outer card-border-color">
              <div class="row">
                <div class="col-lg-12">
                  <div class="d-lg-flex align-items-baseline">
                    <h5 class="text-dark mb-0">Dashboard</h5>
                    
                  </div>
                </div>
              </div>
              
             
              <div class="row mt-4">
                  <div class="col-12 col-sm-6 col-md-6 col-xl-4 grid-margin stretch-card">
                    <div class="card">
                      <div class="row">
                        <div class="col-md-4 col4">
                          <div class="income-box">
                            <i class="mdi mdi-cash"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col8">
                            <div class="card-body set-card-body">
                            <h4 class="card-title">TOTAL QUESTIONS</h4>
                            <div class="d-flex justify-content-between">
                              <p class="text-dark rupe-set"><?php
                              $db->get('tbl_questions');
                              echo $db->count;

                               ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  
                  
                  
                 
              </div>
            
            </div>
          </div>
          
          
          
          
          
          <?php include '../partials/footer.php'; ?>
          
        </div>
        
      </div>
    
    </div>
  
   
    <?php include '../partials/js_libs.php'; ?>
    
  </body>

</html>