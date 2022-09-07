<div class="bio-graph-heading">
    <i><b><?php echo $_SESSION['user_login']['bio']; ?></b></i>
</div>
<div class="panel-body bio-graph-info shadow-lg">
    <h1>Bio Graph</h1>
    <div class="row">
        <div class="bio-row">
            <p><span>Name </span>: <?php echo $_SESSION['user_login']['name']; ?></p>
        </div>
        <div class="bio-row">
            <p><span>National Code</span>: <?php echo $_SESSION['user_login']['national_code']; ?></p>
        </div>
        <div class="bio-row">
            <p><span>Occupation </span>: <?php echo $_SESSION['user_login']['proff_name']; ?></p>
        </div>
        <div class="bio-row">
            <p><span>Medical Number </span>: <?php echo $_SESSION['user_login']['medical_number']; ?></p>
        </div>
        <div class="bio-row">
            <p><span>Phone </span>: <?php echo $_SESSION['user_login']['phone']; ?></p>
        </div>
        <div class="bio-row">
            <p><span>Experiance </span>: <?php echo $_SESSION['user_login']['experiance']; ?></p>
        </div>
        <div class="bio-row">
            <p><span>Satisfaction </span>: <?php echo $_SESSION['user_login']['satisfaction']; ?> %</p>
        </div>
    </div>
</div>