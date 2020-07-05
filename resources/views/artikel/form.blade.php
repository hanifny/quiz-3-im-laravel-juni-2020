@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Buat Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/artikel">Daftar Artikel</a></li>
                        <li class="breadcrumb-item active">Buat Artikel</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="/artikel" method="post">
                            @csrf
                            <!-- Jangan lupa @csrf ya! -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" name="judul" id="judul"
                                        placeholder="Masukkan judul">
                                </div>
                                <label>Tag</label><br>
                                <div class="form-check form-check-inline">
                                    <input name="tag1" class="form-check-input" type="checkbox" value="Android Dev" id="tag1">
                                    <label class="form-check-label" for="tag1">Android Dev</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="tag2" class="form-check-input" type="checkbox" value="Java" id="tag2">
                                    <label class="form-check-label" for="tag2">Java</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="tag3" class="form-check-input" type="checkbox" value="Networking" id="tag3">
                                    <label class="form-check-label" for="tag3">Networking</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="tag4" class="form-check-input" type="checkbox" value="PHP" id="tag4">
                                    <label class="form-check-label" for="tag4">PHP</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="tag5" class="form-check-input" type="checkbox" value="Javascript" id="tag5">
                                    <label class="form-check-label" for="tag5">Javascript</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="tag6" class="form-check-input" type="checkbox" value="Software Engineering" id="tag6">
                                    <label class="form-check-label" for="tag6">Software Engineering</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="tag7" class="form-check-input" type="checkbox" value="Cybersecurity" id="tag7">
                                    <label class="form-check-label" for="tag7">Cybersecurity</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="tag8" class="form-check-input" type="checkbox" value="Web Development" id="tag8">
                                    <label class="form-check-label" for="tag8">Web Development</label>
                                </div>
                                <!-- textarea -->
                                <div class="form-group mt-2">
                                    <label>Isi</label>
                                    <textarea class="form-control" name="isi" rows="3"
                                        placeholder="Mulai buat kontenmu.."></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection