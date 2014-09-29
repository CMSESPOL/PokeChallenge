
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PokeChallenge</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?=anchor(base_url().'home', 'Inicio')?></li>
            <li><?=anchor(base_url().'map_capture', 'Captura')?></li>
            <li><?=anchor(base_url().'ranking', 'Ranking')?></a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata('username')?><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?=anchor(base_url().'my_account', 'Mi Cuenta')?></li>
                <li class="divider"></li>
                <li><?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
