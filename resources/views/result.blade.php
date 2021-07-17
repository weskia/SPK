<!-- @extends( 'layout.main') -->

<!-- @section('SPK','result') -->

<!-- @section('content') -->
<!-- As a link -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Hasil Perhitungan</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
<section class="content">
  <div class="card-body">'
    <h1 style="text-align: center"><strong> SISTEM PENDUKUNG KEPUTUSAN</strong></h1>
    <h3 style="text-align:center"><p><strong class="text-muted">Pemilihan Penerimaan Beasiswa PPA Pendidikan Informatika STKIP PGRI Sumatera Barat</strong></p></h3>
  </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-edit"><strong>&nbsp; Matriks Perbandingan Berpasangan </strong></i></h5>
              <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
              </div>
          </div>
<!-- /.card-header -->
<div class="card-body">
  <div class="row">
    <div class="col-md-12">
      <p class="text-center"><strong></strong></p>
      <div class="tab-content" id="custom-tabs-four-tabContent">
            </div>
            </div>
        </div>
          <table id="example2" class="table table-bordered table-hover table-striped">
          <thead>
          <tr>
          <th scope="col"><h5></h5>
          <th scope="col"><h5>IPK</h5></th>
          <th scope="col"><h5>Pendapatan Orang Tua</h5></th>
          <th scope="col"><h5>Tanggungan Orang Tua</h5></th>
          <th scope="col"><h5>Semester</h5></th>
          <th scope="col"><h5>Prestasi</h5></th>
          </tr>
          </thead>
        <tbody>
        @foreach ($matrik as $matriks )
        <tr>
          <td><h5>{{$matriks->nama_atribut}}</h5></td>
          <td><h5>{{$matriks->id_ipk}}</h5></td>
          <td><h5>{{$matriks->id_pendapatan}}</h5></td>
          <td><h5>{{$matriks->id_tanggungan}}</h5></td>
          <td><h5>{{$matriks->id_semester}}</h5></td>
          <td><h5>{{$matriks->id_prestasi}}</h5></td>
        </tr>
        @endforeach
        </tfoot>
        </table>
      </div>
    </div>                
  </div>
</div>                
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title"><i class="fas fa-edit"><strong>&nbsp; Menghitung Matriks Nilai Normalisasi </strong></i></h5>
          <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
          </div>
      </div>
<!-- /.card-header -->
<div class="card-body">
<div class="row">
<div class="col-md-12">
  <p class="text-center"><strong></strong></p>
  <div class="tab-content" id="custom-tabs-four-tabContent">
        </div>
        </div>
    </div>
      <table id="example2" class="table table-bordered table-hover table-striped">
      <thead>
      <tr>
      <th scope="col"><h5></h5>
      <th scope="col"><h5>K1</h5></th>
      <th scope="col"><h5>K2</h5></th>
      <th scope="col"><h5>K3</h5></th>
      <th scope="col"><h5>K4</h5></th>
      <th scope="col"><h5>K5</h5></th>
      </tr>
      </thead>
    <tbody>
    @foreach ($matrik as $matriks )
    <tr>
      <td><h5>{{$matriks->nama_atribut}}</h5></td>
      <td><h5>{{$matriks->n_ipk}}</h5></td>
      <td><h5>{{$matriks->n_pendapatan}}</h5></td>
      <td><h5>{{$matriks->n_tanggungan}}</h5></td>
      <td><h5>{{$matriks->n_semester}}</h5></td>
      <td><h5>{{$matriks->n_prestasi}}</h5></td>
    </tr>
    @endforeach
    </tfoot>
    </table>
  </div>
</div>                
</div>
</div>
      
<!-- ./card-body -->    
</div>

<!-- /.card -->
</div>

<!-- /.col -->
</div>
<!-- /.row -->
</div>

<!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- ./wrapper --> 