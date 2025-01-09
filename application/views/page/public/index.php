<div class="container-xl">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="<?= base_url('') ?>">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('') ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">News</a>
          </li>
          <?php if($this->session->has_userdata('id')) : ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('//dashboard') ?>">Dashboard</a>
            </li>
          <?php endif ?>
          <?php if($this->session->has_userdata('id')) : ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('//registrasi') ?>">Registrasi</a>
            </li>
          <?php endif ?>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <?php if ($this->session->has_userdata('id')): ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/AuthController/handleLogout') ?>">Logout</a>
            </li>
          </ul>
        <?php else: ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/auth/login') ?>">Login</a>
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </nav>


</div>