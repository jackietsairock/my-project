<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>編輯使用者</title>
</head>
<body>
    <h1>編輯使用者</h1>
    <form action="/users/update/<?= esc($user['id']) ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" 
               value="<?= esc($user['username']) ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"
               value="<?= esc($user['email']) ?>" required><br>

        <button type="submit">送出</button>
    </form>
</body>
</html>
