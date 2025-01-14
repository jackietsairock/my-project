<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
    <h1>Users</h1>
    <ul>
        <?php if (! empty($users)) : ?>
            <?php foreach ($users as $user) : ?>
                <li><?= esc($user['username']) ?> - <?= esc($user['email']) ?></li>
            <?php endforeach ?>
        <?php else : ?>
            <li>目前沒有任何使用者。</li>
        <?php endif ?>
    </ul>
</body>
</html>
