<?php
    include('common/html_header.php');
    include('common/menu_profile.php');
    include('common/db_connect.php');
    $sql="SELECT * FROM departures WHERE is_delete='0' ORDER BY created_at";
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
                        <h3>Departures</h3>
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
                              if(isset($_GET['result']) && $_GET['result']=='deleted'){
                              ?>
                                <div class="alert alert-success">
                                Data has been deleted
                                </div>
                              <?php
                              }
                              elseif (isset($_GET['result']) && $_GET['result']=='updated') {
                              ?>
                              <div class="alert alert-success">
                                Data has been deleted
                                </div>
                              <?php
                              }
                              
                              if($num_of_rows > 0){
                              ?>
  
                              <table class="table"> 
                                <tr>
                                <th>Flight Code</th>
                                <th>Airlines</th>
                                <th>Departure Time</th>
                                <th>Destination</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Delete</th>
                                <th>Update</th>
                                </tr>
                                <?php
                                while($row=mysqli_fetch_assoc($result)){
                                  ?>

                                <tr>
                                <td><?php echo ($row['FlightCode']); ?></td>
                                <td><?php echo ucwords(strtolower($row['Airlines'])); ?></td>
                                <td><?php echo date_format(date_create($row['Departure']),'H:i:s'); ?></td>
                                <td><?php echo ($row['Destination']); ?></td>
                                <td><?php echo ($row['Status']); ?></td>
                                <td><?php echo date_format(date_create($row['created_at']),'d-m-Y H:i:s'); ?></td>
                            <td><a href="delete_departures.php?id=<?php echo $row['FlightCode']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                            <td><a href="update_departures.php?id=<?php echo $row['FlightCode']; ?>" class="btn btn-default"><i class="fa fa-edit"></i></a></td>
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