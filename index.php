<?php
  $page_title = 'All Product';
  require_once('includes/load.php');
  
  $regStudents = join_slots_table();
  // $msg='Hii'
  
?>
<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12" style="margin-top:100px;">
       <!-- <?php echo display_msg($msg); ?> -->
     </div>
    <div class="col-md-12">
    <div>
        <h1 style="text-align:center;">Student Registration</h1>

      </div>
      <div>
      
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
         <div class="pull-left" >
           <a href="register.php" class="btn btn-primary" style="background-color: #669999; border: none; color: white; border-radius: 12px;">Book a Slot</a>
         </div>
        </div>
        <div class="panel-body" style="background-color:rgba(105,105,105,0.5);">
          <table class="table table-bordered" >
            <thead>
              <tr style="color:rgba(0,0,0,1);">
                <th  style="width: 10%; text-align:center;"> Index </th>
                <th  style="width: 10%;text-align:center;"> Student ID </th>
                <th  style="width: 10%;text-align:center;"> First Name </th>
                <th  style="width: 10%;text-align:center;"> Last Name </th>
                <th  style="width: 20%;text-align:center;"> Email ID </th>
                <th  style="width: 10%;text-align:center;"> Project Title</th>
                <th  style="width: 10%;text-align:center;"> Phone no. </th>
                <th  style="width: 10%;text-align:center;"> Slot date </th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($regStudents as $regStudent):
                ?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                <td class="text-center"> <?php echo remove_junk($regStudent['id']); ?></td>
                <td class="text-center"> <?php echo remove_junk($regStudent['first_name']); ?></td>
                <td class="text-center" > <?php echo remove_junk($regStudent['last_name']);?></td>
                <td class="text-center"> <?php echo remove_junk($regStudent['email']); ?></td>
                <td class="text-center"> <?php echo remove_junk($regStudent['project_title']); ?></td>
                <td class="text-center"> <?php echo remove_junk($regStudent['phone_number']); ?></td>
                <td class="text-center"> <?php echo remove_junk($regStudent['date']) . ' ' . $regStudent['start_time'] . ' - ' . $regStudent['end_time'] ;
                ; ?></td>
              </tr>
             <?php endforeach; ?>
            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
