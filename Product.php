

<?php

include "Header.php";

if (isset($_POST["btnsave"])) {
    $Product = $_POST["Product"];

    $price = $_POST["price"];
    $size = $_POST["size"];
    $Notes = $_POST["Notes"];

    $filname = $_FILES["myimage"]["name"];
    $temp = $_FILES["myimage"]["tmp_name"];

    move_uploaded_file($temp, "../Shopping/ProductImage/$filname");

    $stment = "insert into  products (Product,Price,Image,Size,Description)  values ('$Product','$price','$filname','$size','$Notes')";

    mysqli_query($con, $stment);

    if (!mysqli_error($con)) {
        echo '<div class="callout callout-success">
    <h4> تم الحفظ بنجاح </h4>
    <p>done .</p>
  </div>  ';

    }

}

?>



<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add  Product  </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form"   method="POST" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1"> Product  </label>
          <input  name="Product" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product ">
        </div>

             <div class="form-group">
                <label for="exampleInputEmail1"> price  </label>
                <input  name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter price ">
              </div>


              <div class="form-group">
                    <label for="exampleInputEmail1"> size  </label>
                 <select  name="size"  class="form-control" >
                     <option value="SM"> SM</option>
                     <option value="LG"> LG </option>
                     <option value="XXl"> XXl </option>
                 </select>
                  </div>



                      <div class="form-group">
                        <label for="exampleInputEmail1"> image   </label>
                        <input  name="myimage" type="file" class="form-control" >
                      </div>


            <div class="form-group">
                <label for="exampleInputEmail1"> Notes   </label>
             <textarea  class="form-control"  name="Notes" id="" cols="30" rows="10"></textarea>
              </div>



      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button name="btnsave" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>







<?php

include "Footer.php";

?>