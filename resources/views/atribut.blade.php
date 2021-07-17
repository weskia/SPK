<!-- @extends( 'layout.main') -->

<!-- @section('SPK','atribut') -->

<!-- @section('content') -->
<!-- As a link -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Atribut</h1>
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
              <h5 class="card-title"><i class="fas fa-user"></i><strong>&nbsp; DATA ATRIBUT </strong></h5>

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
                          
                          <th scope="col"><h5>Id Atribut</h5>
                          <th scope="col"><h5>Nama Atribut<h5></th> 
                          <th scope="col"><h5>Aktif</h5></th> 
                          <th scope="col"><h5>Tipe Atribut</h5></th>
                          <th scope="col"><h5>Opsi</h5></th>      
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($atribut as $atributs )
                        <tr>
                          
                          <td><h5>{{$atributs->id}}</h5></td>
                          <td><h5>{{$atributs->nama_atribut}}</h5></td>
                          <td><input type="checkbox" name="aktif" id="aktif" checked=""></td>
                          <td><h5>{{$atributs->tipe}}</h5></td>
                          <td>
                            <form method="post" action="{{route ('atribut.delete', $atributs->id)}}" class="d-inline">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>
                                Delete</button>
                            </form>
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

</div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <!-- ./wrapper --> 