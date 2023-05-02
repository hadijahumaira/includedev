<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Listify</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <h1 class="text-center">EDIT TO DO LIST</h1>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
        <div class="card-body">
    <form action="/updatetodo/{{ $data->id }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Task Title</label>
        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $data->judul }}">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Type of Task</label>
        <select class="form-select" name="jenis" aria-label="Default select example">
          <option selected>{{  $data->jenis }}</option>
          <option value="ToDo">To Do</option>
          <option value="Done">Done</option>
          <option value="Doing">Doing</option>
        </select>      
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Rank</label>
        <input type="number" name="noprioritas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $data->noprioritas }}">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Example Code -->
  </body>
</html>