<?php include('db_connect.php') ?>
<?php
$twhere ="";
if($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>
<!-- Info boxes -->
 <div class="col-12">
          <div class="card">
            <div class="card-body">
              Welcome <?php echo $_SESSION['login_name'] ?>!
            </div>
          </div>
  </div>
  <hr>
  <?php 

    $where = "";
    if($_SESSION['login_type'] == 2){
      $where = " where manager_id = '{$_SESSION['login_id']}' ";
    }elseif($_SESSION['login_type'] == 3){
      $where = " where concat('[',REPLACE(user_ids,',','],['),']') LIKE '%[{$_SESSION['login_id']}]%' ";
    }
     $where2 = "";
    if($_SESSION['login_type'] == 2){
      $where2 = " where p.manager_id = '{$_SESSION['login_id']}' ";
    }elseif($_SESSION['login_type'] == 3){
      $where2 = " where concat('[',REPLACE(p.user_ids,',','],['),']') LIKE '%[{$_SESSION['login_id']}]%' ";
    }
    ?>
        
      <div class="row">
         <?php if($_SESSION['login_type'] == 1): ?>
         <div class="col-6 col-sm-6 col-md-12" >
            <div class="small-box bg-primary bg-gradient shadow-sm border" >
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM mov $where")->num_rows; ?></h3>

                <p>Total Movies</p>
              </div>
              <div class="icon bg-light">
                <i class="fa fa-layer-group"></i>
              </div>

            <?php endif; ?>   
          </div>
           <div class="col-6 col-sm-6 col-md-12" >
         <?php if($_SESSION['login_type'] == 1): ?>
         
            <div class="small-box  bg-danger shadow-sm border" >
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM scripts $where")->num_rows; ?></h3>

                <p>Total Script</p>
              </div>
              <div class="icon bg-success">
                <i class="fa fa-address-card" ></i>
              </div>


            <?php endif; ?>   
               
          </div>
           <div class="col-6 col-sm-6 col-md-12">
            <div class="small-box bg-success shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT t.*,p.name as pname,p.start_date,p.status as pstatus, p.end_date,p.id as pid FROM task_list t inner join project_list p on p.id = t.project_id $where2")->num_rows; ?></h3>
                <p>Total Tasks</p>
              </div>
              <div class="icon bg-light">
                <i class="fa fa-tasks"></i>
              </div>
            </div>
          </div>
        </div>


       
          

      </div>
      
        </div>
      </div>
