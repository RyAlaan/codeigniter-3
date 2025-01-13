<div class="row" style="height: 100vh;">
    <?= form_open('/AuthController/handleRegister', ['class' => 'col-md-8 d-flex flex-row align-items-center justify-content-center']); ?>

        <!-- input method -->
        <input type="text" name="_method" value="POST" hidden>
        
        <div class="w-50">
    
            <!-- message -->
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger">
                    <div class="bg-danger rounded">
                        <p class=""><?= $this->session->flashdata("error") ?></p>
                    </div>
                </div>
            <?php endif ?>

            <div class="mb-3">
                <p class="mb-0 text-muted">Hello there!👋</p>
                <h4 class="mb-0 font-weight-bold">Let's create your account</h4>
            </div>

            <div class="form-group mb-3">
                <label class="font-weight-normal" for="Username">Name</label>
                <input id="Username" type="text" class="form-control" name="username" placeholder="Please insert your name">
            </div>

            <div class="form-group mb-3">
                <label class="font-weight-normal" for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" placeholder="Create your password">
            </div>

            <button class="btn btn-submit btn-primary w-100 rounded mt-3" type="submit">Submit</button>
            <p class="mt-3 text-center">Already have an account? <a href="<?= base_url('//auth/login') ?>">Login</a> here</p>

        </div>

    </form>
    <div class="col-4 bg-primary"></div>
</div>