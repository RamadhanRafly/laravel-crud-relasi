<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="margin:20px;">
<div class="card-header">Create New Penumpang</div>
<div class="card-body">
    <form action="{{ url('penumpang') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label><br>
        <input type="text" name="nama" id="nama" class="form-control" required><br>

        <label>Nomor Telepon</label>
        <input type="number" name="no_telp" id="no_telp" class="form-control" required><br>

        <label>Jenis Kelamin</label>
        <div class="form-group">
        <select type="text" class="form-control" name="jeniskelamin" value="" id="jeniskelamin">
            @isset($jenis_kelamin)
            @foreach ($jenis_kelamin as $item)
            <option value="{{ $item->id}}">{{ $item->jeniskelamin}}</option>
            @endforeach
             @endisset          
          </select>
        </div>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
</div>
</div>
</body>
</html> 