@extends('layouts.admin')

@section('title','Nueva Section')

@section('style')

<!-- Font Awesome -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/adminlte/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seccion de departamentos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Principal</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.section.index')}}">seccion</a></li>
              <li class="breadcrumb-item active">Crear nuevo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Seccion</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                {!! Form::open(['route'=>'admin.section.store','method'=>'POST']) !!}
                	 <!-- text input -->
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del departamento...">
                        <br>
                        <button type="submit" class="btn btn-success mr-2">Guardar</button>
                        <a href="{{route('admin.section.index')}}" class="btn btn-light">Cancelar</a>
                      </div>
                {!! Form::close() !!}
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection


@section('scripts')

<!-- jQuery -->
<script src="http://127.0.0.1:8000/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://127.0.0.1:8000/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://127.0.0.1:8000/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://127.0.0.1:8000/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://127.0.0.1:8000/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://127.0.0.1:8000/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://127.0.0.1:8000/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- DataTables -->
<script src="http://127.0.0.1:8000/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="http://127.0.0.1:8000/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://127.0.0.1:8000/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://127.0.0.1:8000/adminlte/plugins/moment/moment.min.js"></script>
<script src="http://127.0.0.1:8000/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://127.0.0.1:8000/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://127.0.0.1:8000/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://127.0.0.1:8000/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://127.0.0.1:8000/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://127.0.0.1:8000/adminlte/dist/js/demo.js"></script>


@endsection