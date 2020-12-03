<!-- <h2><?= esc($title); ?></h2> -->

<?php if (! empty($tests) && is_array($tests)) : ?>

    <?php foreach ($tests as $tests_item): ?>

        <h3><?= esc($tests_item['title']); ?></h3>

        <div class="main">
            <?= esc($tests_item['email']); ?>
        </div>
        <p><a href="/auth/<?= esc($tests_item['slug'], 'url'); ?>">View user </a></p>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No Tests</h3>http://localhost:8080/login

    <p>Unable to find any tests for you.</p>

<?php endif ?>

<!-- <iframe src="https://powerva.microsoft.com/webchat/bots/48d6f6c5-075d-4a28-8f31-c3e17af44b86" frameborder="0" style="width: 70%; height: 40%;"></iframe> -->