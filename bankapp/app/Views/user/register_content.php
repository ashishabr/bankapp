
        <div class="nk-block" id="l-register">
            <div class="nk-form">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input name="rname" type="text" class="form-control" placeholder="Username">
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="email" name="remail" class="form-control" placeholder="Email Address">
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input name="rpass" type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="fm-checkbox">
                    <label><input name="ragree" type="checkbox" class="i-checks"> <i></i> Agree the <a href="">terms and policy</a></label>
                </div>
                <button type="submit" name="reg_user" href="#" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></button>
            </div>

            <div class="nk-navigation rg-ic-stl">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
                <!-- <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a> -->
            </div>
        </div>
        <img id="loading_gif" width="100" src="<?= base_url(); ?>/assets/img/loading.gif">

        <style type="text/css">
            #loading_gif
            {
                display: none;
            }
        </style>