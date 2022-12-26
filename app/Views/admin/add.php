<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 my-4 text-gray-800">User add</h1>
    <div class="row justify-content-center">
        <div class="col-6 ">

            <div class="row mb-3 ">
                <div class="col-2">
                    <label for="inputPassword6" class="col-form-label">Fullname</label>
                </div>
                <div class="col-10">
                    <input type="text" id="inputPassword6" class="form-control">
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-2">
                    <label for="inputPassword6" class="col-form-label">Username</label>
                </div>
                <div class="col-10">
                    <input type="text" id="inputPassword6" class="form-control">
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-2">
                    <label for="inputPassword6" class="col-form-label">Email</label>
                </div>
                <div class="col-10">
                    <input type="text" id="inputPassword6" class="form-control">
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-2">
                    <label for="inputPassword6" class="col-form-label">Image</label>
                </div>
                <div class="col-10">
                    <input type="text" id="inputPassword6" class="form-control">
                </div>
            </div>

            <div class="row mb-3 g-3 align-items-center">
                <div class="col-2">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                </div>
                <div class="col-6">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-4 text-center">
                    <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long.
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-6">
                    <button class="my-3 btn btn-success">Save</button>
                    <button class="btn btn-success">Reset</button>
                </div>

            </div>
            






        </div>


    </div>




</div>
<?= $this->endSection(); ?>