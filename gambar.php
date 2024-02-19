<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
    <style>
        .container{
            width: 100%;
            display: grid;
            place-items: center;
            margin-top: 20px
        } 
        
        .navbar{
            width:100% ;
            height:100% ;
            display: flex;
            justify-content: center:

        }
    </style>
<body> 
    <div class="navbar d-flex justify-content-around">

        <a href="logout.php" class="btn btn-primary my-3">logout</a>
    </div>
    <table border=1 width="90%x"></table>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <td>nama album</td>
                <td>deskripsi</td>
                <td>tanggal dibuat</td>
                <td>user id</td>
                <td>aksi</td>
            </tr>
            <tr>
                <td>sekolah</td>
                <td>nama sekolah</td>
                <td>15-02-2024</td>
                <td>1</td>
                <td><a href="hapus.php" class="btn btn-danger">HAPUS</a></td>
            </tr>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>