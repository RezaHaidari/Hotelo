
<script src="{{theme('frontend/js/jquery-2.1.1.js')}}"></script>
<script src="{{theme('frontend/js/jquery.mixitup.min.js')}}"></script>
<script src="{{theme('frontend/js/main.js')}}"></script>


<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="#0">ورود </a></li>
            <li><a href="#0">ساخت اکانت جدید</a></li>
        </ul>

        <div id="cd-login"> <!-- log in form -->
            <form class="cd-form" method="post" action="user/login">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" name="email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input name="password" class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="Password">

                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="submit" value="Login">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup"> <!-- sign up form -->
            <form class="cd-form" method="post" action="/user">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">نام</label>
                    <input name="name" class="full-width has-padding has-border" id="signup-username" type="text" placeholder="نام و نام خانوادگی">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">ایمیل</label>
                    <input name="email" class="full-width has-padding has-border" id="signup-email" type="email" placeholder="پست الکترونیک">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">تلفن همراه</label>
                    <input name="mobile" class="full-width has-padding has-border" id="signup-username" type="text" placeholder="تلفن همراه">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">تلفن</label>
                    <input name="telephone" class="full-width has-padding has-border" id="signup-username" type="text" placeholder="تلفن تماس">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">کد پستی</label>
                    <input name="postal_code" class="full-width has-padding has-border" id="signup-username" type="text" placeholder="کد پستی">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">رمزعبور</label>
                    <input name="password" class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="رمز عبور">
                    <span class="cd-error-message">Error message here!</span>
                </p>




                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Create account">
                </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->

        <div id="cd-reset-password"> <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->

</body>
</html>