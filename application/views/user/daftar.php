<div class="container">

  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Daftar</h5>
          <form class="form-signin">
            <div class="form-label-group">
              <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
              <label for="inputUsername">Username</label>
            </div>
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Alamat email" required>
              <label for="inputEmail">Alamat email</label>
            </div>


            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Kata sandi" required>
              <label for="inputPassword">Kata sandi</label>
            </div>
            <div class="form-label-group">
              <input type="password" id="inputPassword2" class="form-control" placeholder="Konfirmasi Kata sandi" required>
              <label for="inputPassword2">Konfirmasi kata sandi</label>
            </div>

            <button class="btn btn-lg btn-login btn-block text-uppercase" type="submit">Daftar</button>
            <hr class="my-2">
            <div class="d-flex justify-content-center">
              <a href="<?= base_url('user/masuk'); ?>">Masuk</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>