<!-- <h2><?= esc($title); ?></h2> -->

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/auth/signup" method="post">
    <?= csrf_field() ?>
    Enter email: <input type="text" name="email" placeholder="Email"/><br />
    Choose password: <input type="password" name="password" placeholder="Enter a password"/><br />

    <input type="submit" name="submit" value="Create user" />

</form>