<p>Alguien solicitó un restablecimiento de contraseña en esta dirección de correo electrónico para <?= site_url() ?>.</p>

<p>Para restablecer la contraseña usa este código o URL y sigue las instrucciones.</p>

<p>Tu codigo: <?= $hash ?></p>

<p>Visita el <a href="<?= site_url('reset-password') . '?token=' . $hash ?>">Formulario Restablecer</a>.</p>

<br>

<p>Si no solicitó un restablecimiento de contraseña, puede ignorar este correo electrónico de manera segura.</p>
