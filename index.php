<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ota upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            
            <div class="card cajita">
                <h1>Hola perras</h1>
                 <p>Upload bin</p>

                <br>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <small>Sube tu archivo al servidor..</small>
                    <br>
                    <input type="file" name="bin" id="bin">
                    <br>
                    <br>
                    <input class="btn btn-primary btn-block" id="uploadBtn" name="uploadBtn" type="submit" value="Subir">
                </form>
            </div>
        </div>
    </div>

</body>

<style>
    body{
        background-color:#0b7285;
    }
    .cajita{
        background-color:#0c8599;
        margin: auto;
        position: relative;
        top: 200px;
        padding: 20px;
        color: white;
        border-radius: 10px;
    }
</style>
</html>