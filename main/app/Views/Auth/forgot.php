<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>


<form class="login-form" action="<?= route_to('forgot') ?>" method="post">
    <div class="row">
        <div class="input-field col s12">
            <h5 class="ml-4"><?= lang('Auth.forgotPassword') ?></h5>
            <p class="ml-4">Puedes restablecer tu contraseña</p>
            <?= view('App\Auth\_message_block') ?>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-2">person_outline</i>
            <input id="email" type="text" class="<?php if (session('errors.email')) : ?>validate invalid<?php endif ?>" name="email">
            <label for="email" class="center-align"><?= lang('Auth.emailAddress') ?></label>
            <span class="helper-text" data-error="<?= session('errors.email') ?>" data-success=""><?= session('errors.email') ?></span>

        </div>
    </div>

    <?= reCaptcha3('reCaptcha3', ['id' => 'recaptcha_v3'], ['action' => 'contactForm']); ?>
    
    <div class="row">
        <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 mb-1"><?= lang('Auth.sendInstructions') ?></button>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="<?= route_to('login') ?>">Login</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
            <p class="margin right-align medium-small"><a href="<?= route_to('register') ?>">Register</a></p>
        </div>
    </div>
</form>

<?= $this->endSection() ?>