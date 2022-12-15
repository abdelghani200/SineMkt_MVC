<?php include(VIEWS . 'inc' . DS . 'nav.php'); ?>
<!-- <h1 class="text-center  my-5 py-3" style="margin-top: 15rem;">View All Products </h1> -->


<div class="container mt-5">
    <div style="margin-top: 10rem;">
        <div class="text-center   mb-2 py-3" style="color: black;font-size:27px;margin-top:15rem;">
            View All Products.
        </div>
    </div>
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col" class="text-center">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    
                    <?php $i = 1; ?>
                    <?php foreach ($products as $row) :  ?>
                        <tr>
                            <td> <?php echo $i;
                                    $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?> <b class="float-right"> Dh </b></td>
                            <td>
                                <?php //echo '<img   style="width: 80px; height: 80px; border-radius: 50px;" src="'.$row['image'].'"/>'; 
                                ?>
                                <img src="<?php echo BURL . '/' . $row['image'] ?>" style="width: 80px; height: 80px; border-radius: 50px;" alt="">
                            </td>
                            <td>
                               
                                <a href="<?php url('/product/edit/' . $row['id']) ?>" class="btn btn-info ">Edit</a>
                               
                            </td>
                            <td>
                                <a href="<?php url('/product/delete/' . $row['id']) ?>" class="btn btn-danger ">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>




        </div>
    </div>
</div>
<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>