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
    <div class="card-header">Edit Page</div>
    <div class="card-body">

    <form action="{{ route('penumpang.update' , $penumpang->id) }}" method="POST">
    {!! csrf_field() !!}
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{ $penumpang->id }}" id="id">
    <label>Nama</label><br>
    <input type="text" name="nama" id="nama" value="{{ $penumpang->nama}}" class="form-control"><br>
    <label>No.Telepon</label><br>
    <input type="number" name="no_telp" id="no_telp" value="{{ $penumpang->no_telp }}" class="form-control"><br>
    <label>Jenis Kelamin</label><br>
    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    @foreach ($jenis_kelamin as $item)
                                    @if($item->id==$penumpang->jenis_kelamin || $item->id == old('jenis_kelamin'))
                                  <option selected value="{{ $item->id}}" >{{ $item->jeniskelamin}}
                                 </option>
                                 @else 
                                 <option value="{{ $item->id }}" >{{ $item->jeniskelamin }}
                                </option>
                                           @endif
                                     @endforeach
          </select>
    <input type="submit" value="Update" class="btn btn-success"></br>   
</form> 
</div>
</div>
</body>
</html>