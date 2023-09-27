<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title>Work Experience</title>
</head>
<body>
    <h1>Work Experience</h1>
    <ul>
        <?php foreach($teamExperience as $index => $member): ?>
            <li>
                <a href='detail.php?name=<?= urlencode($member["name"]) ?>'>
                    <?= $member["name"]; ?>
                </a> Experience: <?= workExperience($member["experience"]); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
