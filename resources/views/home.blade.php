@extends('layouts.nav')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="m-0">Dashboard</h2>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Recomende amigos e ganhe!
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!--  Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 200px;">
                     
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
           <!-- Left col -->
           <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                 Pretende vender um imóvel connosco?
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!--  Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 200px;">
                     
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
        </section>
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
         <!-- Custom tabs (Charts with tabs)-->
         <div class="card">
           <div class="card-header">
             <h3 class="card-title">
               <i class="fas fa-chart-pie mr-1"></i>
              Pretende comprar um imóvel connosco?
             </h3>
           </div><!-- /.card-header -->
           <div class="card-body">
             <div class="tab-content p-0">
               <!--  Sales -->
               <div class="chart tab-pane active" id="revenue-chart"
                    style="position: relative; height: 200px;">
                  
                </div>
             </div>
           </div><!-- /.card-body -->
         </div>
         <!-- /.card -->
       </section>
          <!-- /.Left col -->
      </div><!-- /.container-fluid -->
    </section>


</div>




@endsection