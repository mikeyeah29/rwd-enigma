<?php

    $login_failed = isset($args['login_failed']) ? $args['login_failed'] : false;

?>

<style>

    .login-form {
        background-color: #fbead2;
        padding: 2rem;
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

</style>

<div class="login-form py-xlarge">
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 mx-auto">

                <form action="" method="POST">

                    <?php wp_nonce_field('rwd_enigma_nonce', 'rwd_enigma_nonce'); ?>

                    <div class="form-group">
                        <input type="password" name="rwd_enigma_password" class="form-control" placeholder="Password" required>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="ml-auto form-control" style="white-space: nowrap;">View Website</button>
                        </div>
                    </div>

                    <div class="form-error mt-4">
                        <?php if ($login_failed): ?>
                            <p class="form-message--error">Incorrect password. Please try again.</p>
                        <?php endif; ?>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>