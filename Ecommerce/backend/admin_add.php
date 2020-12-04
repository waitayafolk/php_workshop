<?php include('h.php');?>
<form  name="admin" action="admin_add_db.php" method="POST" id="admin" class="form-horizontal" autocomplete="off">

          <div class="form-group">
            <div class="col-sm-6" align="left"> Username  </div>
            <div class="col-sm-6" align="left">
              <input  name="user" type="text" required class="form-control" id="user" placeholder="user" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left"> Password  </div>
            <div class="col-sm-6" align="left">
              <input  name="password" type="password" required class="form-control" id="password" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left"> ชื่อ-สกุล  </div>
            <div class="col-sm-6" align="left">
              <input  name="name" type="text" required class="form-control" id="name" placeholder="ชื่อ-สกุล" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left"> Level  </div>
            <div class="col-sm-6" align="left">
            <select class="form-control form-control-lg" id="level" name="level">
            <option value="">-Choose-</option>
              <option value="admin">Admin</option>
              <option value="sale">Sale</option>
            </select>
            </div>
          </div>  

          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-5" align="right">
              <button type="submit" class="btn btn-success btn-sm" id="btn"> <span class="glyphicon glyphicon-saved"></span>บันทึก </button>      
            </div> 
          </div>
</form>