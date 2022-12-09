<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>




<h1 class="text-center   mb-2 py-3" style="margin-top: 15rem;">Connexion</h1>

<div class="container">
    <form method="POST" action="<?php url('login/getLogin') ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" required name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" required name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
    <a href="./sign.php" class="txt3">
        Don't have account ?
    </a>
</div>


<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>