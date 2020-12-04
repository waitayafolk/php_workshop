<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<head>
    <body id="page-top" style="color : black;" >
        <div id="content">
            <div id="wrapper">
                <?php include('menuleft.php');?>
                <?php include('navbar.php');?>
                <div class="container-fluid">
                <div class="box box-success">
                    <div class="box-header">
                       <h2>จัดการ User</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="text">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a class="btn btn-primary" href="admin.php?act=add" role="button"><i class="fa fa-plus"></i>เพิ่มแอดมิน</a>
                    </div>
                </div>
            </div>
                        <div class="card-body">
                        
                        <div class="table-responsive">
                            <?php
                            $act = $_GET['act'];
                            // print_r($act);exit();
                            if($act == 'add'){
                                include('admin_add.php');
                            }elseif( $act == 'edit'){
                                include('admin_edit.php');
                            }
                            else{
                                include('admin_list.php');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>