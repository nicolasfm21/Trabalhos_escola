<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
        body {
            display: grid;
            place-items: center;
        }

        form {
            width: 20vw;
            border: 2px solid black;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 10px;
            position: relative;
            top: 100%;
        }
    </style>
  


<form action="testlog.php" method="POST">
<h1>login</h1>
<input type="text" placeholder="email" name="email" required>
<input type="password" placeholder="senha" name="senha" required>

<input type="submit" name="submit" >

</form>



</body>
</html>