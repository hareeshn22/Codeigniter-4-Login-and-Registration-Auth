<?=$this->extend('layouts\auth')?>


<?=$this->section('title')?>
Login & Registration
<?=$this->endSection()?>

<?php echo $this->section('content') ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <!-- <h2>Login in</h2> -->
            <div class="text-center">
                <img class="mb-4" src="/assets/img/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            </div>
            <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
                <?=session()->getFlashdata('msg')?>
            </div>
            <?php endif;?>

            <form action="<?php echo base_url(); ?>/login/valid" method="post">

                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" value="<?=set_value('email')?>"
                        class="form-control" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Signin</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php echo $this->endSection() ?>