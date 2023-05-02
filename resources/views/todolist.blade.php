<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Listify</title>
  </head>
  <body>
    <h1 class="text-center">TO DO LIST</h1>
    <div class="container">
      <a href="/addtodo" class="btn btn-success">Add +</a>
        <div class="row">
        @if ($message = Session::get('success'))
          <div class="alert alert-success mt-3" role="alert">
            {{ $message }}
          </div>
        @endif
        <table class="table mt-1">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Jenis</th>
      <th scope="col">Rank</th>
      <th scope="col">Date Created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->judul }}</td>
      <td>{{ $row->jenis }}</td>
      <td>{{ $row->noprioritas }}</td>
      <td>{{ $row->created_at->format('d M Y')}}</td>
      <td>
      <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}">Delete </button>
      <a href="/showtodo/{{$row->id}}"  class="btn btn-primary">Edit</a>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
  <script>

 $('.delete').click( function() {
  var judul = $(this).attr('data-id');
  swal({
  title: "Apakah anda yakin untuk menghapus data ini?",
  //text: "Anda Akan menghapus data dengan judul "+judul+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location ="/deletetodo/"+judul+""
    swal("Data berhasil di hapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus");
  }
});
 });

  </script>
</html>