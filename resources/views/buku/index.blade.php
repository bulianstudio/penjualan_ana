@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Buku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Buku</h3>
              <div class="card-tools">
                  <a href="{{ url('admin/buku/tambah', []) }}" class="btn btn-info btn-sm"><i class="fas fa-plus"> Tambah</i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm">
                <thead class="thead-dark">
                <tr>
                  <th>No</th>
                  <th>Judul Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Pengarang</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($obj as $item)
                <tr>  
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $item->judul }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>{{ $item->pengarang }}</td>  
                <td>
                    <a href="{{ url('admin/buku/edit/'.$item->id) }}" class="btn btn-info btn-sm" > Ubah</a> 
                    &nbsp;
                    <a href="{{ url('admin/buku/hapus/'.$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')" > Hapus </a>
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@push('scripts')
<script>
  $(function () {
    $("#example1").DataTable();
    $('#tablePelanggan').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endpush