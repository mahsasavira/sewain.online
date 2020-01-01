<div class="container">

    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Masuk</h5>
                    <form class="form-signin">
                        <div class="form-label-group">
                            <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                            <label for="inputUsername">Username</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Kata sandi" required>
                            <label for="inputPassword">Kata sandi</label>
                        </div>

                        <button class="btn btn-lg btn-login btn-block text-uppercase" type="submit">Masuk</button>
                        <hr class="my-2">
                        <div class="d-flex justify-content-center">
                            <a href="<?= base_url('user/daftar'); ?>">Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>