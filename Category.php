

<?php

include "Header.php";

if (isset($_POST["Category"])) {
    $name = $_POST["Category"];

    $stment = "insert into category
    (Category)  values ('$name')  ";

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
      <h3 class="box-title">Add  Category </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form"   method="POST">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1"> Category </label>
          <input  name="Category" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category ">
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