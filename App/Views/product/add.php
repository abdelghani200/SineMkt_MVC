<?php include(VIEWS . 'inc' . DS . 'nav.php'); ?>



<h1 class="text-center   mb-2 py-3" style="margin-top: 15rem;">Add New Product </h1>

<div class="container mt-5">
  <!-- <a type="submit" href="<?php  url('product/index') ;?>" name="submit" class="btn btn-primary" class="float-right">View</a> -->
    <div class="row">
        <div class="col-8 mx-auto">
    

            <?php if (isset($success)) : ?>
                <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
            <?php endif; ?>
            


            <form class="p-5 border mb-5" method="POST" action="<?php url('product/store'); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" required name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" required class="form-control" name="price" id="price">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" required class="form-control" name="file" id="image" multiple="multiple" >
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                   
            </form>

        </div>
    </div>
</div>





<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>