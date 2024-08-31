<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br><br>
    <a class="btn btn-outline-danger" href="{{url("/create_file")}}">Create File</a><br><br>
        <div class="row">
            <div class="col-md-8">
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">File</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->file}}</td>
      <td>
        <a class="btn btn-outline-info" href="{{route('file.view', $data->id)}}">View</a>
        <form action="{{ route('file.delete', $data->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-warning" onclick="return confirm('Are you sure you want to delete this file?')">Delete</button>
            </form>&nbsp;&nbsp;
        &nbsp;&nbsp;
        @if (strpos($data->file, '.svg') === false)
            <a href="{{URL::to('/')}}/Files/{{$data->file}}" class="btn btn-info" download>Download</a>
        @endif
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
            </div>
        </div>
    </div>
    
</body>
</html>