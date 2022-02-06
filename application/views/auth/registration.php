<main class="main-content  mt-0">
  <section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col">
            <div class="card card-plain">
              <div class="card-header pb-0 text-start">
                <h4 class="font-weight-bolder">Sign Up</h4>
                <p class="mb-0"><?= $this->session->flashdata('message'); ?></p>
              </div>
              <div class="card-body col-12">
                <form method="post" action="<?= base_url('auth/registration'); ?>">
                  <div class="form-group row">
                    <div class="mb-3 col-6">
                      <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" name="email" value=<?= set_value('email'); ?>>
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3 col-6">
                      <input type="text" class="form-control form-control-lg" placeholder="Name" aria-label="Name" name="name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="mb-3 col-6">
                      <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="password" name="password1">
                    </div>
                    <div class="mb-3 col-6">
                      <input type="password" class="form-control form-control-lg" placeholder="Retype Password" aria-label="password2" name="password2">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Daftar</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Sudah Punya Akun?
                  <a href="<?= base_url('auth'); ?>" class="text-primary text-gradient font-weight-bold">Masuk</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>