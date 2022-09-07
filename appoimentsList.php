<div class="panel overflow-auto scrollbar" style="height:470px !important;">
    <form id="new_appointment " action="new_appointment" method="post" class="p-1">
        <header class="ms-4 mb-4">
            <h3>
                <caption>Add a new appointment time</caption>
            </h3>
        </header>
        <div class="col-md-6 my-2">
            <label for="">Day</label>
            <select name="day" required class="form-select form-select-lg" aria-label=".form-select-sm example">
                <option value="1">Saturday</option>
                <option value="2">Sunday</option>
                <option value="3">Monday</option>
                <option value="4">Tuesday</option>
                <option value="5">Wednesday</option>
                <option value="6">Thursday</option>
                <option value="7">Friday</option>
            </select>
        </div>
        <div class="col-md-6 my-2">
            <label for="">time</label>
            <input name="time" required class="form-control form-control-sm" type="time" id="">
        </div>
        <footer class="panel-footer mt-3 d-flex justify-content-end">
            <input type="submit" class="btn btn-info" value="ADD">
        </footer>
    </form>
    <div class="bio-graph-heading">
        <h2>Appoiments List</h2>
    </div>
    <div class="panel-body bio-graph-info shadow-lg">
        <div class="row px-3 justify-content-center">
            <div id="appoinments" class="table-responsive mt-1">
                <table class="table table-hover">
                    <thead class="table-info">
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">patient name</th>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($appoinments_list as $i => $appoinment) : ?>
                            <tr>
                                <th scope="row"><?php echo $i+1?></th>
                                <td>
                                    <?php echo ($appoinment['name'] != null) ? $appoinment['name'] : 'None'; ?>
                                </td>
                                <td><?php echo $appoinment['day']?></td>
                                <td><?php echo $appoinment['time']?></td>
                                <?php echo ($appoinment['action']) ? $reserved : $notreserved;?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>