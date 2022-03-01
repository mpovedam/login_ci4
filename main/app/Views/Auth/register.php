<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<form class="login-form" action="<?= route_to('register') ?>" method="post">
    <?= csrf_field() ?>

    <div class="row">
        <div class="input-field col s12">
            <h5 class="ml-4"><?= lang('Auth.register') ?></h5>
            <p class="ml-4">Únete a nuestro equipo!</p>
        </div>
    </div>

    <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-2">person_outline</i>
            <input id="username" type="text" class="<?php if (session('errors.username')) : ?>validate invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
            <label for="username" class="center-align"><?= lang('Auth.username') ?></label>
            <span class="helper-text" data-error="<?= session('errors.username') ?>" data-success=""><?= session('errors.username') ?></span>

        </div>
    </div>

    <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-2">mail_outline</i>
            <input id="email" type="text" class="<?php if (session('errors.email')) : ?>validate invalid<?php endif ?>" name="email" aria-describedby="emailHelp" value="<?= old('email') ?>">
            <label for="email"><?= lang('Auth.email') ?></label>
            <span class="helper-text" data-error="<?= session('errors.email') ?>" data-success=""><?= session('errors.email') ?></span>
            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
        </div>
    </div>

    <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-2">lock_outline</i>
            <input id="password" type="password" class="<?php if (session('errors.password')) : ?>validate invalid<?php endif ?>" autocomplete="off" name="password">
            <label for="password"><?= lang('Auth.password') ?></label>
            <span class="helper-text" data-error="<?= session('errors.password') ?>" data-success=""><?= session('errors.password') ?></span>
        </div>
    </div>

    <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-2">lock_outline</i>
            <input id="pass_confirm" type="password" class="<?php if (session('errors.pass_confirm')) : ?>validate invalid<?php endif ?>" autocomplete="off" name="pass_confirm">
            <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
            <span class="helper-text" data-error="<?= session('errors.pass_confirm') ?>" data-success=""><?= session('errors.pass_confirm') ?></span>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12"><?=lang('Auth.register')?></button>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <p class="margin medium-small"><a href="<?= route_to('login') ?>">¿Ya tienes una cuenta? Iniciar sesión</a></p>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <p class="margin medium-small grey-text center">Al crear una cuenta estás aceptando el</p>
            <p class="margin medium-small grey-text center"><a href="<?= route_to('forgot') ?>">Acepto los términos y condiciones de focuspymes.com y Política de Privacidad</a></p>
        </div>
    </div>

</form>



<?= $this->endSection() ?>