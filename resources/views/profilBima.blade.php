@extends('layouts.template')

@section('content')
<section class="content">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title"> Profil Mahasiswa
                </h3>
                <div class="card-body">
                    Nama Lengkap : {{$users->namaLengkap}}<br>
                    Nama Panggilan : {{$users->name}}<br>
                    NIM :  {{$users->nim}}<br>
                    Kelas : {{$users->kelas}}<br>
                    No Absen : {{$users->noAbsen}}<br>
                    Prodi : {{$users->prodi}}<br>
                    Jurusan : {{$users->jurusan}}<br>
                    Universitas : {{$users->universitas}}<br>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection