
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row" style="margin:20px">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Laravel 10 Crud (Create,Read,Update,and Delete)</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('penumpang/create')  }}" class="btn btn-success btn-sm" title="Add New Penumpang">
                    Add New
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Jenis Kelamin</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penumpang as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->jenis_kelamin}}</td>
                                <td>
                                    <a href="{{url('/penumpang/' .$item->id)}}" title="View"><button class="btn btn-info btn-sm "><i aria-hidden="true"></i><i>View</i></button></a>
                                    <a href="{{url('/penumpang/' .$item->id . '/edit/')}}" title="Edit"><button class="btn btn-primary btn-sm"><i aria-hidden="true"></i><i>Edit</i></button></a>
                                    <form method="POST" action="{{url('/penumpang' . '/' . $item->id) }}" accep-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Penumpang" onclick="return confirm("Confirm Delete?") "><i aria-hidden="true"></i><i>Delete</i></button></a>
                                    </form>
                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>
</div>
</div>
</body>
</html>

