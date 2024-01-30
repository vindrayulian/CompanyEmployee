@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <form action="/employee-create" method="POST">
            @csrf
            <div class="row p-3">
                <div class="col-md-6">
                    <label for="" class="form-label" >FirstName</label>
                    <input type="text" class="form-control" name="first_name">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label" >LastName</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Gender</label>
                    <div class="pl-4">
                        <input type="radio" class="form-check-input" name="gender" id="genderm" value="Laki-laki" required>
                        <label for="genderm" class="form-label">Laki-laki</label>
                    </div>
                    <div class="pl-4">
                        <input type="radio" class="form-check-input" name="gender" id="genderf" value="Perempuan" required>
                        <label for="genderf" class="form-label">Perempuan</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label" >Perusahaan</label>
                    <input type="text" class="form-control" name="perusahaan">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label" >Hobi</label>
                    <input type="text" class="form-control" name="hobi">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label" >Nomer Handphone</label>
                    <input type="text" class="form-control" name="no_hp">
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="/employee" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection