<?php include(VIEWS . 'inc' . DS . 'nav.php'); ?>


<h1 class="text-center  mt-5 mb-2 py-3" style="margin-top: 15rem;">Edit Product </h1>

<div class="container mt-5">
    <div class="row">
        <div class="col-8 mx-auto">


            <?php if (isset($success)) : ?>
                <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
            <?php endif; ?>



            <form class="p-5 border mb-5" method="POST" action="<?php url('product/update/'.$row['id']); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" required  value="<?php echo $row['name']; ?>" name="name" class="form-control" id="name">
                    <!-- <input type="hidden" value="<?php echo $row['id']; ?>" name="id"> -->
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" required class="form-control" value="<?php echo $row['price']; ?>" name="price" id="price">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file"  class="form-control" id="image" value="<?php echo $row['image']; ?>" name="file" multiple="multiple">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>