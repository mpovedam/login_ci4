<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<form class="<?= route_to('login') ?>" method="post">
	<?= csrf_field() ?>

	<div class="row">
		<div class="input-field col s12">
			<h5 class="ml-4"><?= lang('Auth.loginTitle') ?></h5>
			<p class="ml-4"><?= view('App\Views\Auth\_message_block') ?></p>
		</div>
	</div>

	<?php if ($config->validFields === ['email']) : ?>
		<div class="row margin">
			<div class="input-field col s12">
				<i class="material-icons prefix pt-2">person_outline</i>
				<input id="username" type="email" class="<?php if (session('errors.login')) : ?>validate invalid<?php endif ?>" name="login" value="<?= old('login') ?>">
				<label for="username" class="center-align"><?= lang('Auth.email') ?></label>
				<span class="helper-text" data-error="<?= session('errors.login') ?>" data-success=""><?= session('errors.login') ?></span>
			</div>
		</div>
	<?php else : ?>
		<div class="row margin">
			<div class="input-field col s12">
				<i class="material-icons prefix pt-2">person_outline</i>
				<input id="username" type="text" class="<?php if (session('errors.login')) : ?>validate invalid<?php endif ?>" name="login" value="<?= old('login') ?>">
				<label for="username" class="center-align"><?= lang('Auth.emailOrUsername') ?></label>
				<span class="helper-text" data-error="<?= session('errors.login') ?>" data-success=""><?= session('errors.login') ?></span>
			</div>
		</div>
	<?php endif; ?>

	<div class="row margin">
		<div class="input-field col s12">
			<i class="material-icons prefix pt-2">lock_outline</i>
			<input id="password" type="password" class="<?php if (session('errors.password')) : ?>validate invalid<?php endif ?>" name="password" autocomplete="off">
			<label for="password"><?= lang('Auth.password') ?></label>
			<span class="helper-text" data-error="<?= session('errors.password') ?>" data-success=""><?= session('errors.password') ?></span>
		</div>
	</div>

	<?php if ($config->allowRemembering) : ?>
		<div class="row">
			<div class="col s12 m12 l12 ml-2 mt-1">
				<p>
					<label>
						<input type="checkbox" name="remember" class="<?php if (old('remember')) : ?> checked <?php endif ?>">
						<span><?= lang('Auth.rememberMe') ?></span>
					</label>
				</p>
			</div>
		</div>
	<?php endif; ?>

	<?= reCaptcha3('reCaptcha3', ['id' => 'recaptcha_v3'], ['action' => 'contactForm']); ?>

	<div class="row">
		<div class="input-field col s12">
			<button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12"><?= lang('Auth.loginAction') ?></button>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s6 m6 l6">
			<?php if ($config->allowRegistration) : ?>
				<p class="margin medium-small"><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
			<?php endif; ?>
		</div>
		<div class="input-field col s6 m6 l6">
			<?php if ($config->activeResetter) : ?>
				<p class="margin right-align medium-small"><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
			<?php endif; ?>
		</div>
	</div>

</form>

<?= $this->endSection() ?>