<div class="dash dados-pessoais">
    <div class="internas-header">
        <img src="<?php echo $pageurl; ?>/public/images/internas-logo.png" alt="" />
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <form method="post" class="form-dados-pessoais">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-title">
                                <h3>Dados da conta</h3>               
                            </div>

                            <div class="input-block">
                                <label for="name">Nome do usuário:</label>
                                <input type="text" id="name" name="name" required/>
                            </div>

                            <div class="input-block">
                                <label for="email">E-mail:</label>
                                <input type="email" id="email" name="email" required/>
                            </div>

                            <div class="input-block">
                                <label for="password">Nova senha:</label>
                                <input type="password" name="password" id="password" required/>
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </div>

                            <div class="input-block">
                                <label for="password">repetir senha:</label>
                                <input type="password" name="password" id="password" required/>
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </div>

                            <div class="input-block button-desktop">
                                <button class="button-brown">SALVAR INFORMAÇÕES</button>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-title">       
                                <h3>Dados pessoais</h3>        
                            </div>

                            <div class="input-block">
                                <label for="name">Nome do usuário:</label>
                                <input type="text" id="name" name="name" required/>
                            </div>

                            <div class="input-block">
                                <label for="localizacao">Localização:</label>
                                <input type="text" id="localizacao" name="localizacao" required/>
                            </div>

                            <div class="input-block">
                                <label for="date">Data de Nascimento:</label>
                                <input type="date" name="date" id="date" required/>
                            </div>

                            <div class="input-block button-mobile">
                                <button class="button-brown">SALVAR INFORMAÇÕES</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-8 offset-md-2">
                <div class="dados-pessoais-infos">
                    <svg 
                        width="59px" height="52px">
                        <path fill-rule="evenodd"  fill="rgb(100, 33, 0)"
                        d="M54.441,3.723 L24.564,3.723 C23.808,3.723 23.097,3.426 22.563,2.887 L21.032,1.345 C20.171,0.478 19.026,-0.000 17.808,-0.000 L4.559,-0.000 C2.045,-0.000 -0.000,2.061 -0.000,4.594 L-0.000,47.406 C-0.000,49.939 2.045,52.000 4.559,52.000 L54.441,52.000 C56.955,52.000 59.000,49.939 59.000,47.406 L59.000,8.316 C59.000,5.783 56.955,3.723 54.441,3.723 ZM57.272,47.406 C57.272,48.979 56.002,50.258 54.441,50.258 L4.559,50.258 C2.998,50.258 1.728,48.979 1.728,47.406 L1.728,12.970 C1.728,11.397 2.998,10.118 4.559,10.118 L49.822,10.118 C50.299,10.118 50.686,9.728 50.686,9.247 C50.686,8.766 50.299,8.376 49.822,8.376 L4.559,8.376 C3.490,8.376 2.507,8.750 1.728,9.373 L1.728,4.594 C1.728,3.021 2.998,1.741 4.559,1.741 L17.808,1.741 C18.565,1.741 19.275,2.038 19.810,2.577 L21.341,4.119 C22.202,4.986 23.347,5.464 24.564,5.464 L54.441,5.464 C56.002,5.464 57.272,6.744 57.272,8.316 L57.272,9.373 C56.493,8.750 55.510,8.376 54.441,8.376 L53.517,8.376 C53.040,8.376 52.653,8.766 52.653,9.247 C52.653,9.728 53.040,10.118 53.517,10.118 L54.441,10.118 C56.002,10.118 57.272,11.397 57.272,12.970 L57.272,47.406 ZM29.500,39.901 C29.977,39.901 30.364,39.511 30.364,39.030 L30.364,36.965 C31.437,36.601 32.212,35.578 32.212,34.376 C32.212,32.870 30.995,31.644 29.500,31.644 C28.005,31.644 26.788,32.870 26.788,34.376 C26.788,35.579 27.563,36.601 28.636,36.965 L28.636,39.030 C28.636,39.511 29.023,39.901 29.500,39.901 ZM28.517,34.376 C28.517,33.830 28.958,33.386 29.500,33.386 C30.042,33.386 30.483,33.830 30.483,34.376 C30.483,34.923 30.042,35.367 29.500,35.367 C28.958,35.367 28.517,34.923 28.517,34.376 ZM37.754,26.165 L37.754,22.277 C37.754,17.691 34.051,13.960 29.500,13.960 C24.949,13.960 21.246,17.691 21.246,22.277 L21.246,26.165 C19.657,26.557 18.475,28.003 18.475,29.723 C18.475,30.204 18.862,30.594 19.339,30.594 C19.816,30.594 20.203,30.204 20.203,29.723 C20.203,28.663 21.059,27.801 22.110,27.801 L36.890,27.801 C37.941,27.801 38.797,28.663 38.797,29.723 L38.797,35.307 C38.797,40.472 34.626,44.674 29.500,44.674 C24.374,44.674 20.203,40.472 20.203,35.307 L20.203,33.446 C20.203,32.965 19.816,32.575 19.339,32.575 C18.862,32.575 18.475,32.965 18.475,33.446 L18.475,35.307 C18.475,41.432 23.421,46.416 29.500,46.416 C35.579,46.416 40.525,41.432 40.525,35.307 L40.525,29.723 C40.525,28.003 39.343,26.557 37.754,26.165 ZM32.331,26.060 L26.669,26.060 L26.669,22.277 C26.669,20.704 27.939,19.425 29.500,19.425 C31.061,19.425 32.331,20.704 32.331,22.277 L32.331,26.060 ZM36.026,26.060 L34.059,26.060 L34.059,22.277 C34.059,19.744 32.014,17.684 29.500,17.684 C26.986,17.684 24.941,19.744 24.941,22.277 L24.941,26.060 L22.975,26.060 L22.975,22.277 C22.974,18.652 25.902,15.702 29.500,15.702 C33.098,15.702 36.026,18.652 36.026,22.277 L36.026,26.060 Z"/>
                    </svg>
                    <strong>Informações básicas sobre Proteção de Dados: A Fubá EA armazena seus dados para melhorar o serviço e, com o seu consentimento, oferece novidades, promoções e lançamentos do BoRa. <a href="#">Mais Informações</a></strong>
                </div>
            </div>
        </div>
    </div>

    <div class="internas-footer">
        <span>2021© — Fubá Educação Ambiental</span>
    </div>
</div>