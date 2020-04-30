 
 @extends('/layout/main')
 @section('title','Detail Mahasiswa')

 @section('container')
    <div class="container-fluid">
      <div class="row">
      <div class="col-6">
          <h1 class="mt-3">Detail Mahasiswa</h1>
          <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete" type="submit">Delete</button>
                    <a href="/students" class="card-link">Kembali</a>
                  
                </div>
            </div> 
      </div>
    </div> 
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content mt-3">
      <div class="modal-header bg-secondary text-center">
        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-primary">
        <h5>Are you sure to delete this data ???</h5>
      </div>
      <div class="modal-footer bg-secondary">
        <button type="button" class="btn btn-success" data-dismiss="modal">No,Cancel</button>
        <!-- <form action="{{$student->id}}" method="post" class="d-inline"> -->
        <form action="/students/{{$student->id}}" method="post">
        @method('delete')
        @csrf
        <button class="btn btn-primary" type="submit">Yes,Delete</button>
        </form>
      </div>
    </div>
  </div>
  @endsection
 
