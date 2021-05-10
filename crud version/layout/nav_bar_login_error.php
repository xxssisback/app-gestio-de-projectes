<header class="header_area">	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt="Xexuss"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> 

                    <!-- Form login -->
                    <form action=functions/validate.php method=POST>
                    <label class="login">Login:</label>
                    &nbsp;&nbsp;
                    <input type="text" placeholder="Usuari*" name="usuari" id="usuari">
                    &nbsp;&nbsp;
                    <input type="password" placeholder="Contrasenya*" name="contrasenya" id="contrasenya">
                    &nbsp;&nbsp;
                    <button class="button_login" type="submit" value="Iniciar sessió">Iniciar sessió</button>
                    <br>
                    <span style="font-style:italic; color:#f84b67;">L'usuari o contrasenya són incorrectes, torna-ho a provar.</span>
                    </form>



                </div>
            </nav>
        </div>
    </header>