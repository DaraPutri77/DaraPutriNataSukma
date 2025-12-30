<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Unipdu Peduli</title>
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
            border-radius: 8px;
            box-shadow: 0px 4px 10px grey;
        }

        h2{
            margin-top: 0;
            text-align: center;
            color: black;
        }

        .logo-kampus{
            text-align: center;
            margin-bottom: 10px;
        }

        .logo-kampus img{
            width: 80px;
            height: auto;
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
            text-decoration: underline;
        }

        .role-info{
            font-size: 12px;
            color: dimgray;
            margin-top: -5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-kampus">
            <img src="gambar/logo_unipdu.png" alt="Logo Kampus">
        </div>

        <h2>Selamat Datang di Unipdu Peduli</h2>
        <p style="text-align: center; font-size: 14px;">
            Silakan Login terlebih dahulu untuk mengakses sistem, baik sebagai
            <b>Admin</b> maupun <b>Mahasiswa</b>.
        </p>

        <form action="proses/proses_login.php" method="post">
            <label>Email :</label>
            <input type="email" name="email" required>
            <label>Password :</label>
            <input type="password" name="password" required>

            <label>Login sebagai :</label>
            <select name="role" required>
                <option value="">Pilih jenis pengguna</option>
                <option value="admin">Admin</option>
                <option value="mahasiswa">Mahasiswa</option>
            </select>
            
            <div style="text-align: center; margin-top: 10px;">
                <input type="submit" value="Login">
            </div>
        </form>
    </div> 
</body>
</html>