<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>


<form class="login-form" action="<?= route_to('reset-password') ?>" method="post">
    <?= csrf_field() ?>

    <div class="row">
        <div class="input-field col s12">
            <h5 class="ml-4"><?=lang('Auth.resetYourPassword')?></h5>
            <?= view('App\Auth\_message_block') ?>
            <p class="ml-4"><?=lang('Auth.enterCodeEmailPassword')?></p>
        </div>
    </div>

    <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-2">mail_outline</i>
            <input id="token" type="text" class="<?php if (session('errors.token')) : ?>validate invalid<?php endif ?>" name="token" value="<?= old('token', $token ?? '') ?>">
            <label for="token"><?= lang('Auth.token') ?></label>
            <span class="helper-text" data-error="<?= session('errors.token') ?>" data-success=""><?= session('errors.token') ?></span>
        </div>
    </div>

    <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-2">mail_outline</i>
            <input id="email" type="text" class="<?php if (session('errors.email')) : ?>validate invalid<?php endif ?>" name="email" value="<?= old('email') ?>">
            <label for="email" class="center-align"><?= lang('Auth.email') ?></label>
            <span class="helper-text" data-error="<?= session('errors.email') ?>" data-success=""><?= session('errors.email') ?></span>

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
            <label for="pass_confirm"><?= lang('Auth.newPasswordRepeat') ?></label>
            <span class="helper-text" data-error="<?= session('errors.pass_confirm') ?>" data-success=""><?= session('errors.pass_confirm') ?></span>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12"><?=lang('Auth.resetPassword')?></button>
        </div>
    </div>

</form>

<?= $this->endSection() ?>
