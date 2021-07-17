<!-- @extends( 'layout.main') -->

<!-- @section('SPK','nilai') -->

<!-- @section('content') -->
<!-- As a link -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Nilai</h1>
          </div>
          <!-- /.col -->
         
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
  <!-- Main content -->
  <section class="content">
      <div class="card-body">'
        <h1 style="text-align: center"><strong>SISTEM PENDUKUNG KEPUTUSAN</strong></h1>
            <h3 style="text-align:center"><p><strong class="text-muted">Pemilihan Penerimaan Beasiswa PPA Pendidikan Informatika STKIP PGRI Sumatera Barat</strong></p></h3>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title"><i class="fas fa-edit"></i><strong>&nbsp; DATA NILAI </strong></h5>

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
                  <p class="text-center">
                    <strong></strong>
                  </p>
                  <div class="tab-content" id="custom-tabs-four-tabContent">
                    
                      <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                          <th scope="col"><h5>No</h5></th>
                          <th scope="col"><h5>Nama Mahasiswa</h5>
                          <th scope="col"><h5>IPK</h5></th> 
                          <th scope="col"><h5>Pendapatan Orangtua</h5></th> 
                          <th scope="col"><h5>Tanggungan</h5></th>  
                          <th scope="col"><h5>Semester</h5></th>    
                          <th scope="col"><h5>Prestasi</h5></th>
                          <th scope="col"><h5>Opsi</h5></th>      
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($mahasiswa as $mahasiswas )
                        <tr>
                          <th scope="row"><h5>{{$loop->iteration}}</h5></th>
                          <td><h5>{{$mahasiswas->nama_mahasiswa}}</h5></td>
                          <td><h5>{{$mahasiswas->ipk}}</h5></td>
                          <td><h5>{{$mahasiswas->pendapatan}}</h5></td>
                          <td><h5>{{$mahasiswas->tanggungan}}</h5></td>
                          <td><h5>{{$mahasiswas->semester}}</h5></td>
                          <td><h5>{{$mahasiswas->prestasi}}</h5></td>
                          <td>
                            <a href="/hapus" type="button" class="btn btn-danger pull-left btn-xs"><h5><i class="fa fa-trash"></i> Hapus</h5>
                          </td>

                        </tr>
                        @endforeach
                        </tfoot>
                      </table>
                    </div>
                 </div>                
               </div>
               </div>               
            </div> 
                       
                  <!-- /.chart-responsive -->
                </div>    
              </div>
              <!-- /.row -->

            </div>
           <!-- ./card-body -->
           
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <!-- ./wrapper --> 