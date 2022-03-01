<?php if (session()->has('message')) : ?>
	<div class="card-alert card gradient-45deg-green-teal">
		<div class="card-content white-text">
			<p>
				<i class="material-icons">check</i> <?= session('message') ?>
			</p>
		</div>
		<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
	<div class="card-alert card gradient-45deg-red-pink">
		<div class="card-content white-text">
			<p>
				<i class="material-icons">error</i> <?= session('error') ?>
			</p>
		</div>
		<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
	<div class="card-alert card gradient-45deg-red-pink">
		<div class="card-content white-text">
			<ul class="alert alert-danger">
				<?php foreach (session('errors') as $error) : ?>
					<li>- <?= $error ?></li>
				<?php endforeach ?>
			</ul>
		</div>
		<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
<?php endif ?>
