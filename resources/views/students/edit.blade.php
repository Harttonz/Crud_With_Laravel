 
 @extends('layout/main')
 @section('title','Form Ubah Data Mahasiswa')

 @section('container')
    <div class="container-fluid">
      <div class="row">
       <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
            <div class="container box">
                <form method="post" action="/students/{{$student->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama" value="{{$student->nama}}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Nrp">Nrp</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="Nrp"  name="nrp" placeholder="Nrp" value="{{$student->nrp}}">
                        @error('nrp')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="Email" name="email" placeholder="Email" value="{{$student->email}}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="Jurusan" name="jurusan" placeholder="Jurusan" value="{{$student->jurusan}}">
                        @error('jurusan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary align-center">Ubah Data !!!</button>
                    </div>
                </form> 
            </div>
       </div>
    </div> 
  @endsection
