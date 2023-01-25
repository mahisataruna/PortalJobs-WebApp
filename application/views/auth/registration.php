<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- Pakai bila diperlukan -->
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Register New Account!</h1>
                        </div>
                        <!-- Form register -->
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <!-- Full Name -->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name') ?>">
                                <!-- Form Error Validation -->
                                <?= form_error('name', '<small class="text-danger">', '</small>');?>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                                <!-- Form Error Validation -->
                                <?= form_error('email', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group row">
                                <!-- Password 1 -->
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <!-- Form Error Validation -->
                                    <?= form_error('password1', '<small class="text-danger">', '</small>');?>
                                </div>
                                <!-- Password 2 -->
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <!-- Account type -->
                            <div class="form-group">
                                <select class="form-control" name="role_id" id="role_id" style="border-radius: 25px;">
                                    <option>-- Select account type --</option>
                                    <hr>
                                    <option value="2">Employe</option>
                                    <option value="3">Jobsecker</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                                <i class="fas fa-fw fa-arrow-right"></i>
                            </button>
                            
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>