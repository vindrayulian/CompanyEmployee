@extends('layout.master')

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with minimal features & hover style</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <a href="{{ route('employee_tambah') }}" class="btn btn-primary">Tambah</a>
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Perusahaan</th>
            <th>Hobi</th>
            <th>Nomer Handphone</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp

            @foreach ( $data as $row)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $row->first_name }}</td>
              <td>{{ $row->last_name }}</td>
              <td>{{ $row->gender }}</td>
              <td>{{ $row->perusahaan }}</td>
              <td>{{ $row->hobi }}</td>
              <td>{{ $row->no_hp }}</td>
              <td>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            @endforeach
          
          </tbody>
          
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection
