@extends('layouts.admin')

@section('title','Proveedores')

@section('style')

<!-- Font Awesome -->
  <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../adminlte/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection


@section('content')

  @include('admin.section.modal_eliminar')

 <!-- Content Wrapper. Contains page content -->
  <div id="confirmareliminar" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Proveedores</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Principal</a></li>
              <li class="breadcrumb-item active">Proveedores</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Proveedores</h3>
              <a href="{{route('admin.provider.create')}}" class="btn btn-outline-primary float-sm-right" >Nueva proveedor</a>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>nombre</th>
                  <th>Contacto</th>
                  <th>Telefono</th>
                  <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                  @foreach($providers as $provider)
                    <tr>
                      <td>{{$provider->id}}</td>
                      <td>{{$provider->nombre}}</td>
                      <td>{{$provider->contacto}}</td>
                      <td>{{$provider->telefono}}</td>
                      <td>
                        <a href="{{route('admin.provider.show',$provider)}}">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{route('admin.provider.edit',$provider)}}">
                          <i class="fas fa-edit"></i>
                        </a>
                        <!--ELIMINAR NO FUNCIONA TODAVIA-->
                        <a href="{{ route('admin.provider.index') }}" data-toggle="modal" data-target="#modal-danger" >
                          <i class="fas fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>id</th>
                  <th>nombre</th>
                  <th>Contacto</th>
                  <th>Telefono</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
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


@section('scripts')


<!-- jQuery -->
<script src="../adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- DataTables -->
<script src="../adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="../adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- jQuery Knob Chart -->
<script src="../adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../adminlte/plugins/moment/moment.min.js"></script>
<script src="../adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../adminlte/dist/js/demo.js"></script>

<!-- Datatable -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection