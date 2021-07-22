<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(https://images.unsplash.com/photo-1608792992053-f397e328a56d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80);
        }

        form{
            height: 40px;
            padding: 20px;            
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #bbb;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form action="soma.php" method="post">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <button type="submit">
        Somar
    </button>
    </form>    
</body>
</html>