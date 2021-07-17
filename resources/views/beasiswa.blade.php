<!-- @extends( 'layout.main') -->

<!-- @section('SPK','beasiswa') -->

<!-- @section('content') -->
<!-- As a link -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Beasiswa</h1>
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
              <h5 class="card-title"><i class="fas fa-edit"><strong>&nbsp; DAFTAR BEASISWA </strong></i></h5>
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
            
          <a href="" type="button" class="btn btn-primary"><h5>Tambah Beasiswa </h5></a>
        </div>
              </div>
          </div>
            <table id="example2" class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
            <th scope="col"><h5>No</h5></th>
            <th scope="col"><h5>Kode Beasiswa</h5>
            <th scope="col"><h5>Nama Beasiswa</h5></th>
            <th scope="col"><h5>Angkatan</h5></th>
            <th scope="col"><h5>Kuota Beasiswa</h5></th>
            </tr>
            </thead>
          <tbody>
          @foreach ($beasiswa as $beasiswas )
          <tr>
            <th scope="row"><h5>{{$loop->iteration}}</h5></th>
            <td><h5>{{$beasiswas->id}}</h5></td>
            <td><h5>{{$beasiswas->nama_beasiswa}}</h5></td>
            <td><h5>{{$beasiswas->angkatan}}</h5></td>
            <td><h5>{{$beasiswas->kuota_beasiswa}}</h5></td>
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