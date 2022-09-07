<div class="container my-5 d-flex justify-content-center">
    <div class="col-4">
        <div class="card shadow-lg">
            <div class="card-header d-flex justify-content-center">
                <div class="col-6 d-flex justify-content-center">
                    <?php $path = ($_SESSION['user_login']['gender'] == 1) ? 'view/assets/img/male.png' : 'view/assets/img/female.png'; ?>
                    <img class="user-avatar shadow-lg" width="100%" src="<?php echo $path?>" alt="">
                </div>
            </div>
            <form id="edit-profile" action="editUserProfile" method="POST" class="card-body ">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Full Name <b class="text-danger">*</b></label>
                    <input name="full-name" type="text" class="form-control" id="firstname" value="<?php echo $_SESSION['user_login']['name']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number <b class="text-danger">*</b></label>
                    <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $_SESSION['user_login']['phone']; ?>" required>
                </div>
                <div class="col-12 justify-content-center d-flex">
                    <div class="btn-group ">
                        <input type="radio" value="male" class="btn-check" name="gender" id="male" autocomplete="off" <?php if ($_SESSION['user_login']['gender'] == 1) {
                                                                                                                echo 'checked ';
                                                                                                            } ?> />
                        <label class="btn btn-outline-primary" for="male">Male</label>

                        <input type="radio" value="female" class="btn-check" name="gender" id="female" autocomplete="off" <?php if ($_SESSION['user_login']['gender'] == 0) {
                                                                                                                echo 'checked ';
                                                                                                            } ?> />
                        <label class="btn btn-outline-primary" for="female">Female</label>
                    </div>
                </div>
            </form>
            <div class="card-footer">
                <div class="d-grid gap-2 my-2 mx-auto">
                    <button form="edit-profile" class="btn btn-success" type="submit">SAVE</button>
                </div>
            </div>
        </div>
    </div>
</div>