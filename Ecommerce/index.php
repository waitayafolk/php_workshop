<?php
include('h.php');
?>
<body class="bg-gradient-primary">
<div class="bg-blue active text-white" style="padding: 10px;">
                <i class="fa fa-clock"></i> ระบบร้านค้าออนไลน์ version 1.0.0.1
            </div>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:80vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body"><h4 style="text-align: center;">ระบบร้านค้าออนไลน์</h4>
                        <form action="checklogin.php" method="POST" autocomplete="off">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user" id="user" placeholder="User">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <button type="submit" id="sendlogin" class="btn btn-primary">login</button>
                            </form>    
                        </form>
                        <p class="message" style="text-align: center;">version 1.0.0.1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>