<div class="container">
    <div class="pt-5 ps-5 shadow-lg bg-gradiant">
        <div class="media profile-header">
            <div class="profile align-items-center d-md-flex me-3 pb-2"><img src="<?php echo $doctor['image']; ?>" alt="..." width="130" class="rounded-pill mb-2 me-3 img-thumbnail">
                <div style="word-wrap: break-word;" class="text-light mt-2">
                    <h4 style="word-wrap: break-word;" class="mt-0 mb-3"><?php echo $doctor['name']; ?></h4>
                    <p class="small mb-2"> <i class="fa <?php echo $doctor['icon']; ?> me-2"></i><?php echo $doctor['proff_name']; ?></p>
                </div>
            </div>

        </div>
    </div>
    <div style="height:400px !important;" class="container bg-light shadow-lg overflow-auto scrollbar">
        <div class="row d-flex justify-content-end">
            <div class="col-lg-2 col-md-5 col-12  mt-3">
                <a href="#appoinments" class="btn btn-outline-info">View Appoinments</a>
            </div>
        </div>
        <div class="row ">
            <?php if ($_SESSION['user_login']['type'] != 'doctor') : ?>
                <div style="word-wrap: break-word;" class="col-lg-6 p-5 col-md-8 col-sm-12">
                    <h4 for="bio">Bio :</h4>
                    <p style="word-wrap: break-word;" id="bio">
                        <?php echo $doctor['bio']; ?>
                    </p>
                    <div id="appoinments" class="table-responsive mt-5">
                        <table class="table table-hover caption-top mt-3">
                            <caption>Appoinments List</caption>
                            <thead class="table-info text-center">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php foreach ($appoinments_list as $i => $appoinment) : ?>
                                    <tr>
                                        <?php $day = $appoinment['day']; $time = $appoinment['time']; ?>
                                        <th scope="row"><?php echo $i+1?></th>
                                        <td><?php echo $appoinment['day'];?></td>
                                        <td><?php echo $appoinment['time'];?></td>
                                        <td>
                                            <?php echo ($appoinment['action'] == '1' && $appoinment['me'] == false) ? $reserved_another : 
                                            (($appoinment['action'] == '1' && $appoinment['me'] == true) ? 
                                            "<button onclick='Appointment(this,$doctor_id,$user_id,$i)' class='btn btn-outline-danger btn-sm'>reserved</button>"."<form id='form-reserve-$i'>
                                                            <input type='hidden' name='user_id' value='$user_id'>
                                                            <input type='hidden' name='doctor_id' value='$doctor_id'>
                                                            <input type='hidden' name='day' value='$day'>
                                                            <input type='hidden' name='time' value='$time'>
                                                          </form>"
                                            : 
                                            "<button onclick='Appointment(this,$doctor_id,$user_id,$i)' class='btn btn-outline-success btn-sm'>not reserved</button>"."<form id='form-reserve-$i'>
                                                            <input type='hidden' name='user_id' value='$user_id'>
                                                            <input type='hidden' name='doctor_id' value='$doctor_id'>
                                                            <input type='hidden' name='day' value='$day'>
                                                            <input type='hidden' name='time' value='$time'>
                                                          </form>"
                                            ); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>
            <div style="word-wrap: break-word;" class="col-lg-6 p-5 col-md-8 col-sm-12 d-block">
                <span class="bg-info rounded-pill px-2 text-light"><?php echo round(($doctor['satisfaction'] / 20), 1); ?><i class="bi bi-star-fill ms-1 fs-6"></i></span>

                <a href="#comments" class="mt-2 d-block txt-dec" style="word-wrap: break-word; cursor: pointer;" id="bio">
                    87 comments
                </a>
                <p class="my-1">experiance : <?php echo $doctor['experiance']; ?> year</p>
                <p class="my-1">Medical Number : <?php echo $doctor['medical_number']; ?></p>
                <div class="list-group mt-4">
                    <caption>comments</caption>
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">List group item heading</h6>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">List group item heading</h6>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">List group item heading</h6>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>