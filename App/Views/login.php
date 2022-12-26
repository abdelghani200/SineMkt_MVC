<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php session_start();  ?>

<?php if (isset($error)) : ?>
    <h3 class="alert alert-danger text-center"><?php echo $error; ?></h3>
<?php endif; ?>


<h1 class="text-center   mb-2 py-3 mt-5">Welcome Admin !!? </h1>
<form method="POST" action="<?php url('login/getLogin') ?>" class="container border mt-5" style="width:500px">
    <!-- Email input -->
    <div class="form-outline mb-6">
        <label class="form-label" for="form2Example1">Email address</label>
        <input type="text" id="form2Example1" required name="username" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Password</label>
        <input type="password" id="form2Example2" required name="password" class="form-control" />
    </div>
    <!-- Confirm Password input -->
    <!-- <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Confirm Password</label>
        <input type="password" id="form2Example2" required name="confirm_password" class="form-control" />
    </div> -->

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
        </div>

        
    </div>

    <!-- Submit button -->
    <button type="submit" name="submit" class="text-center btn btn-primary btn-block mb-4" style="margin-left:12rem">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
        <p>or sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
        </button>
    </div>
</form>