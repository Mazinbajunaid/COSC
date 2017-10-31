<?php require_once '../app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Hey, <?=$_SESSION['username']?></h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p> <?=$data['message']?> </p>
			<?php if ($data['total'] > 0) {?>
			<p> you owe me $$ <?=$data['total']['total']?></p>
			<?php ) ?>
			<a href="/reports/login_report" class="bts bts-primary">show Reports</a>
		</div>
    </div>

    <?php require_once '../app/views/templates/footer.php' ?>
