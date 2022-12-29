<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 my-4 text-gray-800">User add</h1>
    <div class="row justify-content-center">
        <div class="col-10 ">

            <?= view('Myth\Auth\Views\_message_block') ?>
            <form class="user" action="/admin/save" method="post">
                <?= csrf_field() ?>

                <div class="row mb-3 ">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="text" name="image" class="form-control <?php if (session('errors.image')) : ?>is-invalid<?php endif ?>" id="image">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label for="fullname" class="col-sm-2 col-form-label">Fullname</label>
                    <div class="col-sm-10">
                        <input type="text" name="fullname" class="form-control <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" id="fullname">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-4">
                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password">
                    </div>
                    <label for="password" class="col-sm-2 col-form-label">Repeat Password</label>
                    <div class="col-sm-4">
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="pass_confirm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-1">
                        <button type="submit" href="<?= base_url(); ?>/Admin.php" class="btn btn-info">Save</button>
                    </div>
                    <div class="col-1">
                        <button type="reset" class="btn btn-info">Reset</button>
                    </div>
                </div>


            </form>
        </div>

    </div>






</div>
<?= $this->endSection(); ?>