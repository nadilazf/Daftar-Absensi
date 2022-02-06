@extends('students.layout')

@section('content')
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>Edit</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
      </div>
    </div>
  </div>

  @if($errors->any())
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input. <br><br>
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('students.update', $student->id) }}" method="post">
    @csrf
    @method('put')

    <div class="row">
      <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="form-group">
          <strong>NIS:</strong>
          <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS" value="{{ $student->nis }}">
        </div>
      </div>
      <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="form-group">
          <strong>Nama:</strong>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $student->nama }}">
        </div>
      </div>
      <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="form-group">
          <strong>Rombel:</strong>
          <input type="text" name="rombel" class="form-control" placeholder="Masukkan Rombel" value="{{ $student->rombel }}">
        </div>
      </div>
      <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="form-group">
          <strong>Rayon:</strong>
          <input type="text" name="rayon" class="form-control" placeholder="Masukkan Rayon" value="{{ $student->rayon }}">
        </div>
      </div>
      <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="form-group">
          <strong>Keterangan:</strong>
          <input type="radio" name="ket" id="ket-H" value="Hadir" {{ $student->ket == 'Hadir' ? 'checked' : '' }}>
            <label for="ket-H">Hadir</label>
          <input type="radio" name="ket" id="ket-S" value="Sakit" {{ $student->ket == 'Sakit' ? 'checked' : '' }}>
            <label for="ket-S">Sakit</label>
          <input type="radio" name="ket" id="ket-I" value="Izin" {{ $student->ket == 'Izin' ? 'checked' : '' }}>
            <label for="ket-I">Izin</label>
          <input type="radio" name="ket" id="ket-A" value="Alpa" {{ $student->ket == 'Alpa' ? 'checked' : '' }}>
            <label for="ket-A">Alpa</label>
        </div>
      </div>
      <div class="col-xs-12 col-md-12 col-sm-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
@endsection