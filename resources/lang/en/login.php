<?php

return [
    'login_content'=>'<div class="modal modal_auth" data-modal="5">
            <!--   Svg иконка для закрытия окна  -->
            <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
            </svg>
            <h3 class="login_header">Sign in</h3>
            <form class="login_form" id="login_form">
                <input class="login_email" type="email" name="email" placeholder="Your E-mail" required>
                <input class="login_pass" type="password" name="pass" placeholder="Your password" required>
                <button class="login_submit btn_yellow" type="submit" name="auth">Sign in</button>
            </form>
            <button class="restore_pass_btn">Forgot password?</button>
            <p class="login_text">Access to the personal account is possible only for students of the course</p>
        </div>'
];
