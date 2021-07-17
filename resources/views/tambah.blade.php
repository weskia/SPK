<!-- @extends( 'layout.main') -->

<!-- @section('SPK','mahasiswa.tambah') -->

<!-- @section('content') -->
<!-- As a link -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mahasiswa</h1>
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
        <h1 style="text-align: center"><strong> SISTEM PENDUKUNG KEPUTUSAN</strong></h1>
            <h2 style="text-align: center"><p><strong class="text-muted">Pemilihan Penerimaan Beasiswa PPA Pendidikan Informatika STKIP PGRI Sumatera Barat</strong></p></h2>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title"><i class="fas fa-user"></i><strong>&nbsp;  Data Mahasiswa </strong></h5>

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
                    <form action="/mahasiswa/save" method="POST">
                        {{csrf_field()}}
                    
                        <div class="row">
                            <div class="col-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header with-border">
                                  <h3 class="card-title">Tambah Mahasiswa</h3>
                                </div>
                                  <div class=" row">
                                    <label for="inputEmail3" class="col-sm col-form-label">NPM</label>
                                    <div class="col-sm">
                                      <input type="text" class="form-control" id="inputEmail3" name="id">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">Nama Mahasiswa</label>
                                    <div class="col-sm">
                                      <input type="text" class="form-control" id="inputEmail3" name="nama_mahasiswa">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">Angkatan</label>
                                    <div class="col-sm">
                                      <input type="text" class="form-control" id="inputEmail3" name="tahun">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">Semester</label>
                                    <div class="col-sm">
                                      <select type="" class="form-control" id="inputEmail3" value="semester" name="semester">
                                        <option selected>1</option>
                                        <option selected>2</option>
                                        <option selected>3</option>
                                        <option selected>4</option>
                                        <option selected>5</option>
                                        <option selected>6</option>
                                        <option selected>7</option>
                                        <option selected>8</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">IPK</label>
                                    <div class="col-sm">
                                    <input type="text" class="form-control" id="inputEmail3" name="ipk">
                                  </div>
                                  </div>
                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">Tanggungan</label>
                                    <div class="col-sm">
                                    <input type="text" class="form-control" id="inputEmail3" name="tanggungan">
                                  </div>
                                  </div>
                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">Pendapatan</label>
                                    <div class="col-sm">
                                    <input type="text" class="form-control" id="inputEmail3" name="pendapatan">
                                  </div>
                                  </div>
                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">Prestasi</label>
                                    <div class="col-sm">
                                    <input type="text" class="form-control" id="inputEmail3" name="prestasi">
                                  </div>
                                  </div>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-info float-right" data-toggle="modal">Simpan</button>
                        
                                  </div>
                                </form>  
                  </div>     
                  </div>
                    </div>
                 </div>                
               </div>
               </div>               
            </div> 
            
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
