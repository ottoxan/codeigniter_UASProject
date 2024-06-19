            <div class="containerLogin">
                <div class="login form">
                    <?php if($this->session->flashdata('status')) : ?>

                    <div class="alert alert-success">
                    <?= $this->session->flashdata('status'); ?>
                    </div>
                    <?php endif; ?>
                    <header>Login</header>
                    <form action="<?php echo base_url('login') ?>" method="POST">

                        <input type="email" name="email" placeholder="Enter your email" required>
                        <small><?php echo form_error('email') ?></small>
                        <input
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                        required>
                        <small><?php echo form_error('password') ?></small>
                        <input type="submit" name="submit" class="button" value="Login" required>
                    </form>
                    <div class="signup">
                        <span class="signup"
                            >Don't have an account?
                            <a href="<?php echo base_url() ?>signup">SignUp</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>