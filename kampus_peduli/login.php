<!DOCTYPE html>
<html>
    <head>
        <title>SELAMAT DATANG DI KAMPUS PEDULI</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: lightcyan;
            }

            .container{
                width: 400px;
                margin: 60px auto;
                background-color: white;
                border: 1px solid grey;
                padding: 20px;
            }

            h2{
                margin-top: 0;
                text-align: center;
                color: black;
            }

            form label{
                display: block;
                margin-bottom: 5px;
            }

            form input[type="text"],
            form input[type="password"],
            form input[type="email"],
            form textarea,
            form select{
                width: 100%;
                padding: 5px;
                margin-bottom: 10px;
                box-sizing: border-box;
                border: 1px solid grey;
                background-color: white;
            }

            form input[type="submit"],
            button{
                padding: 5px 15px;
                border: 1px solid blue;
                background-color: skyblue;
                color: black;
                cursor: pointer;
            }

            form input[type="submit"]:hover,
            button:hover{
                background-color: deepskyblue;
            }

            a{
                color: blue;
                text-decoration: none;
            }

            a:hover{
                text-decoration : underline;
            }
            </style>
</head>
<body>
    <div class= "container">
        <h2>Selamat Datang di Kampus Peduli</h2>
        <p style ="text-align: center; font-size: 14px;"> Silakan Login terlebih dahulu untuk mengakses sistem, baik sebagai <b>Admin</b> maupun <b>Mahasiswa</b>.</p>
        <form action= "proses/proses_login.php" method="post">
            <label>Email :</label>
            <input type="text" name="email">

            <label>Password :</label>
            <input type = "password" name = "password">

            <div style="text-align: center; margin-top: 10px;">
            <input type = "submit" value= "Login">
</div>
</form>
</body>
</html>