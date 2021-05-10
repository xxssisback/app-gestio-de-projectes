<header class="header_area">	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="functions/carregar_dades.php"><img src="img/logo.png" alt="Xexuss"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">

                            <!-- Usuaris -->
                            <li class="nav-item submenu dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-user">&nbsp;</i>Usuaris</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item "><a class="nav-link" href="nou_usuari.php">Registar usuari</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="gestio_usuaris.php">Gestió de usuaris</a></li>
                                </ul>
                            </li>
                            
                            <!-- Tasques -->
                            <li class="nav-item submenu dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-pencil-alt">&nbsp;</i>Tasques</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="nova_tasca.php">Registar tasca</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="gestio_tasques.php">Gestió de tasques</a></li>
                                </ul>
                            </li>

                            <!-- Projectes -->
                            <li class="nav-item submenu dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-blackboard">&nbsp;</i>Projectes</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="nou_projecte.php">Registar projecte</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="gestio_projectes.php">Gestió de projectes</a></li>
                                </ul>
                            </li>

                            <!-- Calendari -->
                            <li class="nav-item submenu dropdown">
                                <a href="calendari_page.php" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-calendar">&nbsp;</i>Calendari</a>
                            </li>

                        </ul>
                    </div>
                    <div class="right-button">
                        <ul>
                            <li><a class="button_login" href="login.php">
                                <i class="ti-unlock">&nbsp;</i>Logout</a></li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </div>
    </header>