<div class="container my-5">
    <div class="row my-5">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <header>
                <h3>
                    Register Doctor
                </h3>
            </header>
            <img width="100%" src="view/assets/img/bg-doctor-register.jpg" alt="">
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <?php if (isset($_SESSION['register_error'])) : ?>
                <?php if (!empty($_SESSION['register_error'])) : ?>
                    <header>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                <?php foreach ($_SESSION['register_error'] as $error) : ?>
                                    <li>
                                        <strong class="bi bi-exclamation-circle-fill"></strong>
                                        <b>
                                            <?php echo $error; ?>
                                        </b>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </header>
                <?php endif; ?>
            <?php endif; ?>
            <form enctype="multipart/form-data" action="register" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">First name *</label>
                    <input type="text" name="first_name" class="form-control" id="validationCustom01" placeholder="first name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a first name.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Last name *</label>
                    <input name="last_name" type="text" class="form-control" id="validationCustom02" placeholder="last name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a last name.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Passwrd *</label>
                    <input name="password" type="password" class="form-control" placeholder="******" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please choose a valid password.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationpassword" class="form-label">Confirm Passwrd *</label>
                    <input name="confirmPassword" type="password" class="form-control" placeholder="******" id="validationpassword" required>
                    <div class="invalid-feedback">
                        Please choose a valid password.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationPhone" class="form-label">Phone *</label>
                    <div class=" has-validation">
                        <input name="phone" type="text" class="form-control" id="validationPhone" placeholder="09---------" required>
                        <div class="invalid-feedback">
                            Please choose a phone.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">experiance *</label>
                    <input name="experiance" type="number" min="1" placeholder="0" class="form-control" id="validationCustom06" required>
                    <div class="invalid-feedback">
                        Please choose a valid number.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">National Code *</label>
                    <input name="national_code" type="text" class="form-control" placeholder="0123456789" id="validationCustom04" required>
                    <div class="invalid-feedback">
                        Please choose a valid natiional code.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Medical Number *</label>
                    <input name="medical_number" type="text" class="form-control" placeholder="123456" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please choose a valid medical number.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Proficiency *</label>
                    <select name="proficiency" class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <?php foreach ($proficiencies as $prof) : ?>
                            <option value="<?php echo $prof['id'] ?>"><?php echo $prof['proff_name'] ?></option>
                        <?php endforeach; ?>

                    </select>
                    <div class="invalid-feedback">
                        Please select a valid option.
                    </div>
                </div>
                <div class="col-md-8">
                    <div class=" mb-3">
                        <label class="form-label" for="inputGroupFile02">profile image (optional)</label>
                        <input name="profile" accept="image/*" type="file" class="form-control" id="inputGroupFile02">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Gender</label>
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

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Biography (optional)</label>
                    <textarea name="bio" placeholder="write about yourself . . ." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="hidden" name="type" value="doctor">
                <div class="col-12 justify-content-end d-flex">
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
                <div class="col-12 mt-5 d-flex justify-content-between">
                    <a href="home#register" class="btn btn-outline-secondary">already have an account</a>
                    <button class="btn btn-info text-light" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>