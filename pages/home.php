<div class="login">
    <div class="login-left-side">
        <div>
            <img src="<?php echo $pageurl; ?>/public/images/logo-login.png" class="logo-login" alt="" />

            <img src="<?php echo $pageurl; ?>/public/images/login-img.png" class="login-img" alt="" />
        </div>

        <span>2021© — Fubá Educação Ambiental</span>
    </div>

    <div class="login-right-side">
        <h2>Boas-vindas!</h2>

        <p>Faça login para continuar</p>

        <form method="post" class="form-login">
            <div class="input-block">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required/>
            </div>

            <div class="input-block">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required/>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
            </div>

            <div class="opcoes-senha">
                <div>
                    <input type="checkbox" name="lembrar-senha" id="lembrar-senha">
                    <label for="lembrar-senha">Lembrar Senha</label>
                </div>

                <a href="#">Esqueceu sua senha?</a>
            </div>

            <div class="input-block">
                <button class="button-brown">Acessar</button>
            </div>
        </form>
    </div>
</div>