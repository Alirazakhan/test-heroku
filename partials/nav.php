      <style>
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator .count{
            position: absolute;
            left: 42%;
            width: 19px;
            height: 19px;
            border-radius: 100%;
            background: #f2125e;
            top: 0px;
            font-size: 11px;
        }
        .navbar .navbar-brand-wrapper .navbar-brand img{
            max-width: 65%;
            height: 50px;
        }
        .nv-pr-img{
            width: 50%!important;
            height: auto !important;
        }
        .pr-pad{
            padding:20px;
            border-bottom: 1px solid silver;
        }
        .no-hr-hit{
            height:200px;
        }
        .set-hr-hd{
            text-align: center;
            width: 100%;

        }
        @media(min-width: 992px) and (max-width: 1600px){
          .no-dis-big{
            display: none;
          }
        }
      </style>
      
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <button class="navbar-toggler navbar-toggler align-self-center set-plus-nav-outer no-dis-big" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="nv-cus">
          <h3 class="com-nv com-mn"><?php  echo 'Question'; ?></h3>
          
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <div class="no-dis">
         
        </div>
        <ul class="navbar-nav navbar-nav-right"> 
        
        
          
          
          <li class="nav-item d-flex dropdown mr-1 set-plus-nav-outer dropdown1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center set-plus-nav dropbtn" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-settings mx-0 nv-ic"></i>
            </a>
            <div class="dropdown-menu1 dropdown-menu-right navbar-dropdown preview-list dropdown-content" aria-labelledby="messageDropdown">
              <div class="container-fluid>">
                  <div class="row shortcuts px-4">

                    <a href="<?php echo baseurl('logout.php');?>" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                        <i class="no-m-r mdi mdi-logout"></i>
                        </span>
                        <small class="text-info">Logout</small>
                    </a>           
                  </div>
                </div>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    
    