<?php include('h.php');?>
      

<form name="form" method="post" action="product_add_db.php" enctype="multipart/form-data" >
    <div class="form-group">
        <div class="col-sm-6" align="left">product_code</div>
        <div class="col-sm-6" align="left">
              <input  name="product_code" type="text"  class="form-control" id="product_code" placeholder="code" />
        </div>
    </div>
          
    <div class="form-group">
        <div class="col-sm-6" align="left"> product_name  </div>
        <div class="col-sm-6" align="left">
        <input  name="product_name" type="tect"  class="form-control" id="product_name" placeholder="name" />
        </div>
    </div>
          
    <div class="form-group">
        <div class="col-sm-6" align="left"> product_price  </div>
        <div class="col-sm-6" align="left">
            <input  name="price" type="text"  class="form-control" id="price" placeholder="price" />
        </div>
    </div>
            
    <input type="file" name="my_file" /><br /><br />

    <div class="form-group">
        <div class="col-sm-3"> </div>
        <div class="col-sm-5" align="right">
            <button type="submit" class="btn btn-primary" id="btn"> <span class="glyphicon glyphicon-saved"></span>บันทึก </button>      
        </div> 
    </div>
</form>