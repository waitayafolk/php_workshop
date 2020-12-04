<?php
include('h.php');
$level = $_SESSION["level"];
if($level == 'admin'){
echo "
<ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>
<a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.php'>
    <div class='sidebar-brand-icon rotate-n-15'>
        <i class='fas fa-laugh-wink'></i>
    </div>
    <div class='sidebar-brand-text mx-3'>  $name </div>
    </a>

    <hr class='sidebar-divider my-0'>

    <li class='nav-item active'><a class='nav-link' href='dashbord.php'><i class='fas fa-fw fa-tachometer-alt'></i><span>Dashboard</span></a></li>

    <hr class='sidebar-divider'>

    <div class='sidebar-heading'>Admin</div>

    <li class='nav-item'><a class='nav-link' href='admin.php'><i class='fas fa-fw fa-user'></i><span>Admin</span></a></li>

    <hr class='sidebar-divider'>

    <div class='sidebar-heading'>Product</div>

    <li class='nav-item'><a class='nav-link' href='product.php'><i class='fas fa-shopping-basket'></i><span>Product</span></a></li>

    <li class='nav-item'><a class='nav-link' href='cart.php'><i class='fas fa-cart-plus'></i><span>Cart</span></a></li>

    <li class='nav-item'><a class='nav-link' href='../logout.php' onclick='return confirm('Do you want to delete this record? !!!')' ><i class='fa fa-sign'></i><span>Logout</span></a></li>
    <hr class='sidebar-divider d-none d-md-block'>
    </ul>
";
}else{
    echo "
            <ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.php'>
                <div class='sidebar-brand-icon rotate-n-15'>
                    <i class='fas fa-laugh-wink'></i>
                </div>
                <div class='sidebar-brand-text mx-3'>$name </div>
            </a>

            <hr class='sidebar-divider my-0'>

            <li class='nav-item active'><a class='nav-link' href='dashbord.php'><i class='fas fa-fw fa-tachometer-alt'></i><span>Dashboard</span></a></li>

            <hr class='sidebar-divider'>

            <div class='sidebar-heading'>Admin</div>

            <li class='nav-item'><a class='nav-link' href='admin.php'><i class='fas fa-fw fa-user'></i><span>Admin</span></a></li>

            <hr class='sidebar-divider'>

            <li class='nav-item'><a class='nav-link' href='../logout.php' onclick='return confirm('Do you want to delete this record? !!!')' ><i class='fa fa-sign'></i><span>Logout</span></a></li>
            <hr class='sidebar-divider d-none d-md-block'>
            </ul>
";
}
?>
        
        

        

        