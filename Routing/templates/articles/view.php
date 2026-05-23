<?php include __DIR__ . '/../header.php'; ?>

    <h1><?= htmlspecialchars($article->getName()) ?></h1>
    <p><?= htmlspecialchars($article->getText()) ?></p>

<?php include __DIR__ . '/../footer.php'; ?>
