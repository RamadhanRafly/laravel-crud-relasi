<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="margin:20px">
    <div class="card-header">Penumpang Page</div>
    <div class="card-body">
        <h5 class="card-title">Nama : {{ $penumpang->nama }}</h5>
        <h5 class="card-title">No.Telepon : {{ $penumpang->no_telp }}</h5>
        <h5 class="card-title">Jenis Kelamin : {{ $penumpang->jenis_kelamin }}</h5>
    </div>
</div>
</body>
</html>