<section class="clients-style-one-area inc-border default-padding default-padding-top text-center bg-gray">
  <div class="site-heading text-center wow fadeInDown">
    <h2 class="fs-4">Kontak Kami</h2>
    <div class="devider"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5 wow fadeInLeft">
        <div class="d-flex justify-content-center">
          <div class="address">
            <ul class="d-flex flex-column gap-4">
              <!-- Email -->
              <li class="d-flex align-items-center">
                <div class="icon">
                  <i class="fas fa-envelope contact-icon-logo"></i>
                </div>
                <div class="content text-start">
                  <a href="mailto:customer.care@antara.id">customer.care@antara.id</a>
                </div>
              </li>
              <!-- Telp Number -->
              <li class="d-flex align-items-center">
                <div class="icon">
                  <i class="fas fa-phone contact-icon-logo"></i>
                </div>
                <div class="content text-start">
                  <a href="tel:021-3842591">021-3842591</a>
                  <span>/</span>
                  <a href="tel:021-22395579">021-22395579</a>
                </div>
              </li>
              <!-- Mobile Number -->
              <li class="d-flex align-items-center">
                <div class="icon">
                  <i class="fas fa-mobile contact-icon-logo"></i>
                </div>
                <div class="content text-start">
                  <a href="tel:08119569694">08119569694</a><br>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 wow fadeInRight">
        <div class="contact-form">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="d-flex flex-column gap-3">
              <div class="form-group">
                <input type="text" name="name" class="form-control rounded-3 px-3" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control rounded-3 px-3" placeholder="Email" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <button type="submit" class="btn btn-lg rounded-pill px-4 w-100 text-white" style="background: var(--color-primary);">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>