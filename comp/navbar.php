<?php
  function get_navbar(){
    return '
        <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
        <a class="navbar-brand" href="#">
          <img style="background-color:black" src="/res/img/logos/shodotes.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Sho.es
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/" title="Meet us">
                  Who are we?
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/store/" title="find our offers">
                  Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" title="we are open to hire people">
                  Jobs
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" title="Hello again :)">
                    Log In
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/signup/" title="Join us">
                    Sign Up
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" title="Where are we?">
                    Find Us
                </a>
            </li>
          </ul>

        </div>
      </nav>';
  }
 ?>
