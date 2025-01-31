<nav class="navbar navbar-expand bg-dark">
        <div class="collapse navbar-collapse">
            <a style="padding:10px;" class="nav-link text-light"><?php $sess=null; if($sess=="cours"){ echo"<h3>Gestion Cours</h3>";}  elseif($sess=="etudiant"){ echo"<h3>Gestion Etudiant</h3>";}else{echo"<h3>Gestion Universitaire</h3>";}?></a>
            <ul class="navbar-nav" style="margin-left:60%;">
                <li  style="margin-left: 0%; " class="navbar">
                    <a href="?redirect=Gestioncours" class="nav-link text-light">Cours</a>
                </li>

                <li style="margin-left: 60px;"class="navbar ">
                    <a href="?redirect=Gestionclient"  class="nav-link text-light"> Client</a>
                </li>
            </ul>
        </div>
    </nav>



