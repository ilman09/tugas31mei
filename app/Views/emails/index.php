<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<!-- ======= Splash Section 1 ======= -->
<section id="splash" class="d-flex align-items-center">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <h1>
                    My Product <span class="text-yellow">Subscribe to get the latest news!</span> 
                    </h1>
                    <form action="/email/create" method="post">
                    <div><input type="email" name="email" placeholder="Masukan Email" class="form-control"> </div>
                    <br>
                    <div><input type="text" name="name" placeholder="Masukan Nama" class="form-control"></div>
                    <br>
                    <div><button type="submit" class="btn btn-primary">SUBSCRIBE</button></div>
                    </form>
                </div>
            </div>
        </div>
  </section>
  <!-- End Splash -->
  <?= $this->endSection() ?>