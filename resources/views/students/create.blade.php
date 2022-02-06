@extends('students.layout')

@section('content')
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>Add new</h2>
      </div>
      <div class="pull-right">
        <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
      </div>
    </div>
  </div>

  @if($errors->any())
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with yout input. <br><br>
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>NIS:</strong>
          <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Nama:</strong>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Rombel:</strong>
          <input type="text" name="rombel" class="form-control" placeholder="Masukkan Rombel">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Rayon:</strong>
          <input type="text" name="rayon" class="form-control" placeholder="Masukkan Rayon">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Keterangan:</strong>
          <input type="radio" name="ket" id="ket-H" value="Hadir"> 
            <label for="ket-H">Hadir</label>
          <input type="radio" name="ket" id="ket-S" value="Sakit"> 
            <label for="ket-S">Sakit</label>
          <input type="radio" name="ket" id="ket-I" value="Izin"> 
            <label for="ket-I">Izin</label>
          <input type="radio" name="ket" id="ket-A" value="Alpa"> 
            <label for="ket-A">Alpa</label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
@endsection