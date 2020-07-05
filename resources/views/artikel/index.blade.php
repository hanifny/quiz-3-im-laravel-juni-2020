@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/artikel/create">Buat Artikel</a></li>
                        <li class="breadcrumb-item active">Daftar Artikel</li>
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
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 11px; text-align: center">No.</th>
                                        <th style="text-align: center">Judul</th>
                                        <th style="width: 45px;text-align: center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($artikel as $key => $item)
                                    <tr>
                                        <td style="text-align: center"> {{ $no++ }} </td>
                                        <td> <a href="/artikel/{{ $item->id }}">{{ $item->judul }}</a> </td>
                                        <td class="align-middle">
                                            <!-- Modal Bootstrap -->
                                            <ul class="pagination pagination-sm m-0 d-flex justify-content-center">
                                                <li class="page-item">
                                                    <a href="/artikel/{{ $item->id }}/edit">
                                                        <button title="Edit" type="button"
                                                            class="btn btn-primary btn-sm ml-2">
                                                            <i class="fas fa-pen-square"></i>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li class="page-item">
                                                    <form action="/artikel/{{ $item->id }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button title="Hapus" type="submit"
                                                            class="btn btn-danger btn-sm ml-2">
                                                            <i class="fas fa-minus-square"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                            <div class="modal fade" id="jawab" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Form Jawaban
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h3></h3>
                                                            <!-- Form Jawaban -->
                                                            <form role="form" action="/jawaban/{{$item->id}}"
                                                                method="post">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="message-text"
                                                                        class="col-form-label">Jawaban:</label>
                                                                    <textarea name="isi" class="form-control"
                                                                        id="message-text"></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Jawab</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });
</script>
@endpush