@extends('students.layout')

@section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>CRUD Absensi</h2>
        </div>
        <div class="pull-right">
          <a href="{{ route('students.create') }}" class="btn btn-success">Create</a>
        </div>
      </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-succes">
          <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Keterangan</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($students as $student)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->rombel }}</td>
            <td>{{ $student->rayon }}</td>
            <td>{{ $student->ket }}</td>
            <td>
              <form action="{{ route('students.destroy', $student->id) }}" method="post">
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
      @endforeach
        </table>
        {!! $students->links() !!}
@endsection