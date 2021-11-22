

<header>
        <section class="nav-sec ">
            <nav class="nav-bar inner-grid">
                <div class="d-logo">
                    <a href="./index.php" class="logo">Tourist<span>Life</span></a>
                </div>
                <div>

                    <label for="menu" class="bars">
                        <img src="./imgs/svg/bars.svg" alt="menu bar">
                    </label>
                </div>
                <input id="menu" type="checkbox">
                <div class="end">
                    <ul class="nav-items">
                        <li class="nav-item"><a href="./index.php">inicio</a></li>

                        
                            <li class="nav-item-cluster menu2">
                                <label for="menu2" class="label-cl">categoria</label>
                                <input id="menu2" type="checkbox">
                                <ul class="cluster">
                                    <li><a href="./galeria.php">Galeria</a></li>
                                    <li><a href="./playa.php">Playa</a></li>
                                    <li><a href="./montana.php">Montaña</a></li>
                                    <li><a href="./ciudad.php">Ciudad</a></li>
                                </ul>
                            </li>
                        
                        
                        <!-- <li class="nav-item"><a href="">acerca de</a></li> -->
                        <?php
                            if(isset($_SESSION["id"])){
                                echo '<li class="nav-item"><a href="./usuario.php"> <img class="nav-profile" src="./imgs/profile.png" alt="profile"> </a></li>';
                                echo '<li class="nav-item"><a href="./usuario.php"> <i class="hov fal fa-sign-out"></i> </a></li>';
                            }else{
                                echo '<li class="nav-item"><a href="./inicio-sesion.php">Ingresar/Registrarse</a></li>';
                            }
                        ?> 
                        <!-- <li class="nav-item"><a href="./inicio-sesion.php">iniciar sesion</a></li> -->
                    </ul>
                </div>
            </nav>
        </section>
    </header>