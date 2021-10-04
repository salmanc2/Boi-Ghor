<?php
    include('common/html_header.php');
    include('common/menu_profile.php');
    include('common/db_connect.php');
    $sql="SELECT * FROM passengers WHERE is_delete='0' AND Approved=0 ORDER BY FirstName";
    $result=mysqli_query($connect,$sql);
    $num_of_rows = mysqli_num_rows($result);
?>
                <br/>
                <?php
                include('common/sidebar_menu.php');
                include('common/top_navigation.php');
                ?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Approve Passengers</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                              <?php                             
                              if($num_of_rows > 0){
                              ?>
  
                              <table class="table"> 
                                <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Passport Number</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Birth Date</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th>Country</th>
                                <th>Created At</th>
                                <th>Don't Approve</th>
                                <th>Approve</th>
                                </tr>
                                <?php
                                while($row=mysqli_fetch_assoc($result)){
                                  ?>

                                <tr>
                                <td><?php echo ucwords(strtolower($row['FirstName'])); ?></td>
                                <td><?php echo ucwords(strtolower($row['LastName'])); ?></td>
                                <td><?php echo ($row['PassportNo']); ?></td>
                                <td><?php echo ($row['Email']); ?></td>
                                <td><?php echo ($row['Gender']); ?></td>
                                <td><?php echo date_format(date_create($row['BirthDate']),'d-m-Y');?></td>
                                <td><?php echo ($row['Phone']); ?></td>
                                <td><?php echo ($row['Address']); ?></td>
                                <td><?php echo ($row['Country']); ?></td>
                                <td><?php echo date_format(date_create($row['created_at']),'d-m-Y H:i:s'); ?></td>
                            <td><a href="disapproved.php?id=<?php echo $row['PassengerId']; ?>" class="btn btn-danger"><i class="fa fa-close"></i></a></td>
                            <td><a href="approved.php?id=<?php echo $row['PassengerId']; ?>" class="btn btn-success"><i class="fa fa-check"></i></a></td>
                                </tr>

                                <?php
                                }
                                ?>
                              </table>
                              <?php 
                                  }
                                  else if($num_of_rows == 0){
                                   ?>
                                   <div class='alert alert-danger'>
                                    No data found.
                                   </div>
                                   <?php
                                  }
                                   ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
<?php
    include('common/footer.php');
?>