
<?php
$title ="Register | ResumeCraft";
require './assets/includes/header.php';
?>  

    <div class="w-100">
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
            <form method="post" action>
                <div class="d-flex gap-2 justify-content-center">
                    <img class="mb-4" src="./assets/images/logo.png" alt="" height="70">

                    <div>
                        <h1 class="h3 fw-normal my-1"><b>Resume</b> Craft</h1>
                        <p class="m-0">Create your new account</p>

                    </div>
                </div>


                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="">
                    <label for="floatingInput"><i class="bi bi-person"></i> Full Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                    <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                </div>


                <button class="btn btn-primary w-100 py-2" type="submit"><i class="bi bi-person-plus-fill"></i> Register
                </button>
                <div class="d-flex justify-content-between my-3">

                    <a href="" class="text-decoration-none">Forgot Password ?</a>
                    <a href="" class="text-decoration-none">Login</a>

                </div>

            </form>
        </main>

    </div>


    <?php
require 'assets/includes/footer.php';
?>