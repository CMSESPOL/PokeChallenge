  
    <?php
    $username = array('name' => 'username', 'placeholder' => 'Username', 'class' => 'form-control' );
    $password = array('name' => 'password',    'placeholder' => 'Password', 'class' => 'form-control');
    $submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión', 'class' => 'btn btn-lg btn-primary btn-block');
    ?>
    <div class="container">
        <?=form_open(base_url().'login/new_user','role="form" class="form-signin"')?>
        <h2 class="form-signin-heading">Login</h2>
        <?=form_input($username)?><p><?=form_error('username')?></p>
        <?=form_password($password)?><p><?=form_error('password')?></p>
        <?=form_hidden('token',$token)?>
        <?=form_submit($submit)?>
        <?=form_close()?>
        <?php
        if($this->session->flashdata('usuario_incorrecto'))
        {
        ?>
        <p><?=$this->session->flashdata('usuario_incorrecto')?></p>
        <?php
        }
        ?>
    </div>
    </body>
</html>
