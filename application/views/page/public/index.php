<div class="container-xl">
    <?php $this->load->view('layout/user/navbar') ?>

    <?php if ($this->session->flashdata('success') || $this->session->flashdata('error')) :?>
        <div class="alert <?= $this->session->flashdata('success') ? 'bg-success' : 'bg-error'?> alert-dismissible fade show">
            <p class="mb-0"><?= $this->session->flashdata('success') || $this->session->flashdata('error') ?></p>
            <button type="button" data-dismiss="alert" class="close" aria-label="close" >&times;</button>
        </div>
    <?php endif ?>
</div>