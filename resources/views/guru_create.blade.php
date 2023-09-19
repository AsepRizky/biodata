@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Guru Page</h1>
        </div>
        
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Guru</h3>
      </div>
      <div class="card-body">
         <a href="{{ route ('guru.index') }}" 
         class="btn btn-default">Kembali</a>
         <br></br>
         <form action="{{route('guru.store')}}" method="POST">
          @csrf
         <div class="form-group">
            <label>NIP</label>
            <input name="nip" type="number" class="form-control"
            placeholder="...">
            @error('nip')
            <p>{{ $massage}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label>Nama Guru</label>
            <input name="nama_guru" type="text" class="form-control"
            placeholder="...">
            @error('nama_guru')
            <p>{{ $massage}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label>Mapel</label>
            <input name="mapel" type="text" class="form-control"
            placeholder="...">
            @error('mapel')
            <p>{{ $massage}} </p>
            @enderror
        </div>
        
        <input type="submit" name="submit"
        class="btn btn-success" value="Tambah"/>
        </form>
     </div>
      <!-- /.card-body -->
      <div class="card-footer">
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection