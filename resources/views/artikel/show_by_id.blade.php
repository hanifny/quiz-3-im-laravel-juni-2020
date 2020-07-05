@extends('layouts.master')

@section('content')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $artikel[0]->judul }}</h1><br>
            <h6 style="color: grey; line-height: 0">Slug : {{ $artikel[0]->slug }}</h6>
            <h6 style="color: grey;">Tag : {{ $artikel[0]->tag }}</h6>
            <h6 style="color: grey; line-height: 0;">Artikel dibuat : {{ $artikel[0]->created_at }}</h6>
            <h6 style="color: grey; ">Artikel diperbaharui : {{ $artikel[0]->updated_at }}</h6>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/artikel">Data Artikel</a></li>
              <li class="breadcrumb-item active">Jawaban</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">           
            <div class="card mt-3">
              <div class="card-header">
                <p class="card-title"> {{ $artikel[0]->isi }} </p>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection