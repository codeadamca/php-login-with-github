<?php

include('env.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with GitHub</title>
</head>
<body>
    <h1>Login with GitHub</h1>

    <a href="https://github.com/login/oauth/authorize?scope=read:user,user:email&client_id=<?=GITHUB_CLIENT_ID?>">
        Login Using GitHub
    </a>
    
</body>
</html>