@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Peserta Didik Page</h1>
        </div>
        
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Data Peserta Didik</h3>
      </div>
      <div class="card-body">
         <a href="{{ route ('pesertadidik.index') }}" 
         class="btn btn-default">Kembali</a>
         <br></br>
         <form action="{{route('pesertadidik.update', $peserta->id ) }}" method="POST">
          @csrf
          @method('put')
         <div class="form-group">
            <label>NIS</label>
            <input name="nis" type="text" class="form-control"
            placeholder="..." 
            value="{{ $peserta->nis }}">
            @error('nis')
            <p>{{ $massage}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label>Nama lengkap</label>
            <input name="namalengkap" type="text" class="form-control"
            placeholder="..." 
            value="{{ $peserta->namalengkap}}">
            @error('namalengkap')
            <p>{{ $massage}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control">
                <option>-Pilih Jenis Kelamin-</option>

                @if ($peserta-> jk == 'l' ) 
                <option value="l" selected >Laki-Laki</option>
                <option value="p">Perempuan</option>
                @endif

                @if($peserta-> jk == 'p') 
                <option value="l">Laki-Laki</option>
                <option value="p" selected>Perempuan</option>
                @endif
            </select>  
            @error('jk')
            <p>{{ $massage}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label>Nilai</label>
            <input name="nilai" type="number" class="form-control"
            placeholder="..."
            value="{{ $peserta->nilai}}">
            @error('nilai')
            <p>{{ $massage}} </p>
            @enderror
        </div>
        
        <input type="submit" name="submit"
        class="btn btn-success" value="edit"/>
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