            <div class="containerLogin">
                <div class="registration form">
                    <header>Signup</header>
                    <form action="<?php echo base_url('signup') ?>" method="POST">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                        <small><?php echo form_error('email') ?></small>
                        <input
                            type="username"
                            name="username"
                            id="username"
                            class="form-control"
                            placeholder="Enter a username"
                        required>
                        <small><?php echo form_error('username') ?></small>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder="Create a password"
                        required>
                        <small><?php echo form_error('password') ?></small>
                        <input type="submit" name="submit" class="button" value="Signup" required>
                    </form>
                    <div class="signup">
                        <span class="signup"
                            >Already have an account?
                            <a href="<?php echo base_url() ?>login">Login</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>