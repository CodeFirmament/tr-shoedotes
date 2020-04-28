<?php
  function get_navbar(){
    return '
        <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
        <a class="navbar-brand" href="#">
          <img style="background-color:black" src="res/img/logos/shodotes.ico" width="30" height="30" class="d-inline-block align-top" alt="">
          Sho.es
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#" title="Inicio">
                  Who we are
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Publicaciones/2019/El-arte-ASCII.html" title="Publicaciones">
                  Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Biblioteca/index.html" title="Biblioteca">
                  Jobs
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" title="Noticias">
                    Log In
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" title="Foros">
                    Sign Up
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" title="Foros">
                    Find Us
                </a>
            </li>
          </ul>

        </div>
      </nav>';
  }
 ?>
