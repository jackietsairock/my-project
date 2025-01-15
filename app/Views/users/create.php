<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>新增使用者</title>
</head>
<body>
    <h1>新增使用者</h1>
    <form action="/users/store" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <button type="submit">送出</button>
    </form>
</body>
</html>
