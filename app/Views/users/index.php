<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Users List</title>
</head>
<body>
    <h1>使用者列表</h1>
    <a href="/users/create">新增使用者</a>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if (! empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['id']) ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['email']) ?></td>
                        <td>
                            <a href="/users/edit/<?= $user['id'] ?>">編輯</a>
                            <a href="/users/delete/<?= $user['id'] ?>" 
                               onclick="return confirm('確定要刪除嗎？')">刪除</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">尚無使用者資料</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
