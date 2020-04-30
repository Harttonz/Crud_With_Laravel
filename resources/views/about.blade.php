@extends('layout.main')

@section('title','about me')

@section('container')
    <div class="container-fluid">
      <div class="row">
        <div class="col-10">
          <!-- on template engine we can echo data just use double curly bracket -->
          <h1 class="mt-3">Hello,{{$nama}}</h1>
        </div>
      </div>
    </div>
@endsection

