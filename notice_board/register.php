<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <h2>회원가입</h2>
    <form action="register_process.php" method="POST">
        <label for="username">이름:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">비밀번호:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">회원가입 완료</button>
    </form>
    <form action="login.php" method=GET>
        <button type="submit">뒤로</button>
    </form>
</body>
</html>
