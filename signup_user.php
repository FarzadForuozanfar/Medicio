<div class="container my-5">

</div>
<div class="container my-5">
    <div class="row my-5">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <header>
                <h3>
                    Register User
                </h3>
            </header>
            <img width="100%" src="view/assets/img/bg-user-register.png" alt="">
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <?php if (!empty($_SESSION['register_error'])) : ?>
                <header>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong class="bi bi-exclamation-circle-fill"></strong> <b><?php echo $_SESSION['register_error']; ?></b>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </header>
            <?php endif; ?>
            <form action="register" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" name="first_name" class="form-control" id="validationCustom01" placeholder="first name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a first name.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input name="last_name" type="text" class="form-control" id="validationCustom02" placeholder="last name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a last name.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationPhone" class="form-label">Phone</label>
                    <div class=" has-validation">
                        <input name="phone" type="text" class="form-control" id="validationPhone" placeholder="09---------" required>
                        <div class="invalid-feedback">
                            Please choose a phone.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Passwrd</label>
                    <input name="password" type="password" class="form-control" placeholder="******" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid password.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">National Code</label>
                    <input name="national_code" type="text" class="form-control" placeholder="0123456789" id="validationCustom04" required>
                    <div class="invalid-feedback">
                        Please select a valid natiional code.
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="0">
                        <label class="form-check-label" for="exampleRadios2">
                            Female
                        </label>
                    </div>
                </div>
                <div class="col-6 align-items-end d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <input type="hidden" name="type" value="user">
                <div class="col-12 mt-5 d-flex justify-content-between">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#Login" class="btn btn-outline-secondary">already have an account</button>
                    <button class="btn btn-info text-light" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
    <?php include 'view/login_modal.php'?>
</div>
