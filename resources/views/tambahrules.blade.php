<!-- @extends( 'layout.main') -->

<!-- @section('SPK','rules.tambah') -->

<!-- @section('content') -->
<!-- As a link -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rules</h1>
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
              <h5 class="card-title"><i class="fas fa-user"></i><strong>&nbsp;  Buat Rules Pembanding </strong></h5>

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
                    <form action="/atribut/save" method="POST">
                        {{csrf_field()}}
                    
                        <div class="row">
                            <div class="col-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header with-border">
                                  <h3 class="card-title">Tambah Rules</h3>
                                </div>
                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">Pilih Atribut</label>
                                    <div class="col-sm">
                                      <select type="" class="form-control" id="inputEmail3" value="nama_atribut" name="nama_atribut">
                                        <option selected>-Pilih Atribut-</option>
                                        <option value="IPK">IPK</option>
                                        <option value="Pendapatan Orang Tua">Pendapatan Orang Tua</option>
                                        <option value="Tanggungan Orang Tua">Tanggungan Orang Tua</option>
                                        <option value="Semester">Semester</option>
                                        <option value="Prestasi">Prestasi</option>
                                        </select>
                                    </div>
                                  </div>
                                 
                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">Kepentingan</label>
                                    <div class="col-sm">
                                      <select type="" class="form-control" id="inputEmail3" value="kepentingan" name="kepentingan">
                                        <option selected>-Pilih Kepentingan-</option>
                                        <option value="Sama Penting">Sama Penting</option>
                                        <option value="Sedikit Lebih Penting">Sedikit Lebih Penting</option>
                                        <option value="Lebih Penting">Lebih Penting</option>
                                        <option value="Sangat Lebih Penting">Sangat Lebih Penting</option>
                                        <option value="Mutlak Lebih Penting">Mutlak Lebih Penting</option>
                                        </select>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <label for="inputEmail3" class="col-sm col-form-label">Atribut Pembanding</label>
                                    <div class="col-sm">
                                      <select type="" class="form-control" id="inputEmail3" value="atribut_pembanding" name="atribut_pembanding">
                                        <option selected>-Pilih Atribut Pembanding-</option>
                                        <option value="IPK">IPK</option>
                                        <option value="Pendapatan Orang Tua">Pendapatan Orang Tua</option>
                                        <option value="Tanggungan Orang Tua">Tanggungan Orang Tua</option>
                                        <option value="Semester">Semester</option>
                                        <option value="Prestasi">Prestasi</option>
                                        </select>
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
