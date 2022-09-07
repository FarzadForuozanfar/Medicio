<div class="bio-graph-heading">
    <h2>Edit Personal Information</h2>
</div>
<div class="panel-body bio-graph-info shadow-lg">
    <h1>Bio Graph</h1>
    <div class="row justify-content-center">
        <div class="col-11">
            <form enctype="multipart/form-data" action="update_profile" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $_SESSION['user_login']['name'];?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="validationCustom02" value="<?php echo $_SESSION['user_login']['phone'];?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Experiance</label>
                    <input type="number" name="exp" value="<?php echo $_SESSION['user_login']['experiance'];?>" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid number.
                    </div>
                </div>
                <div class="col-md-12 ">
                    <input type="file" accept="image/*" name="profile" class="form-control" aria-label="file example" required>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>
                <div class="col-md-12">
                    <label for="validationTextarea" class="form-label">Textarea</label>
                    <textarea name="bio"  class="form-control px-3" id="validationTextarea" placeholder="Required example textarea" required><?php echo $_SESSION['user_login']['bio'];?>
                    </textarea>
                    <div class="invalid-feedback">
                        Please enter a text in the textarea.
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button class="btn btn-info" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>