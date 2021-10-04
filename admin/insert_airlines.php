<?php
    include('common/html_header.php');
    include('common/menu_profile.php');
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
                        <h3>Insert Airlines</h3>
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
if (isset($_GET['result'])&& $_GET['result']=='success'){
  echo "<div class='alert alert-success'>Data has been submitted</div>";
}

?>
                                <form class="col-lg-6" name="form1" action="process_airline.php" method="POST" enctype="multipart/form-data">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" name="name" placeholder="Airline Name" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" name="code" placeholder="3 Digit Code" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="btn btn-basic submit" type="submit" name="submit1" value="Submit">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
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