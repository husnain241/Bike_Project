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
        <div class="row">
            <div class="col-md-8">
                <form action="{{url('/save_file')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <h1>Upload File</h1><br>
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input
                            type="text"
                            name="name"
                            id=""
                            class="form-control"
                            placeholder="Enter File Name"
                        />
                    </div>
                    .<div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input
                            type="text"
                            name="description"
                            id=""
                            class="form-control"
                            placeholder="Enter Description"
                        />
                    </div>
                    .<div class="mb-3">
                        <label for="" class="form-label">Upload File</label>
                        <input
                            type="file"
                            name="file"
                            id=""
                            class="form-control"
                            placeholder=""
                        />
                    </div>

                    <button type="submit" class="btn btn-outline-info">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>