<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Team Members Ages</title>
</head>
<body>
    <h1>Team Members Ages</h1>
    <ul>
        <?php foreach ($teamAge as $index => $member): ?>
            <li>
                <a href='detail.php?name=<?= urlencode($member["name"]) ?>'>
                    <?= $member["name"]; ?>
                </a> - Age: <?= Age($member["dateOfBirth"]); ?> years
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
