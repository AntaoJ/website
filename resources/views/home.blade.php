@extends('layouts.nav')

@section('content')
<style>
.login100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 70%;
    height: 35px;
    border: 1px solid #000;
    border-radius: 10px;
    background: #fff;
    font-size: 12px;
    color: #000;
    line-height: 1.2;
    text-transform: uppercase;
    letter-spacing: 1px;

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.login100-form-btn:hover {
    background: #000;
    color: #fff;
}

.card-header {
    border-bottom: none;
    padding-bottom: 0;
}

.card-body {
    padding-top: 0;
}

@media only screen and (max-width: 600px) {
    .des {
        display: none;
    }
}
</style>
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
                <section class="col-sm-12 col-md-12 col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h4 style="font-weight:bold">
                                Recomende amigos e ganhe!
                            </h4>
                            <p>Será recompensado por cada transação realizada por eles!</p>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-6" style="margin-top:3rem;">

                                    <div class="tab-content p-0">
                                        <!--  Sales -->

                                        <div class="modal-content cpydiv shadow"
                                            style="border-color:0.1px solid black;border-radius:10px;color:grey;width:auto;">
                                            <p class="container copy mx-auto"
                                                style="font-family:'Myriad Pro 1';font-size:auto;text-align:center;color:grey;margin-top:1%;margin-bottom:2%;">
                                                https://20mediar.pt/register?invite={{Auth::user()->uuid}}
                                            </p>
                                        </div>
                                        <div class="container ml-10 mr-10">
                                            <div class="row ">


                                                <a class="share mx-auto" style="color: #0077b5 !important;"
                                                    href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <span class="mdi mdi-linkedin" style="font-size:400%;"> </span>
                                                </a>
                                                <a class="share mx-auto" style="color:#1da1f2 !important;"
                                                    href="https://twitter.com/intent/tweet?text=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <span class="mdi mdi-twitter " style="font-size:400%;"></span>
                                                </a>
                                                <a class="share mx-auto" style="color:#3a5897 !important;"
                                                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <span class="mdi mdi-facebook " style="font-size:400%;"></span>
                                                </a>
                                                <a class="share mx-auto" style="color:#3a5897 !important;"
                                                    href="mailto:geral@20mediar.pt?body=https://www.facebook.com/sharer/sharer.php?u=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <span class="mdi mdi-mail" style="font-size:400%;"></span>
                                                </a>
                                                <a class="share mx-auto"
                                                    style="color: #27ab00 !important;margin-top:11px;"
                                                    href="https://wa.me/?text=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <img class=" m-1 social-icon hvr-grow"
                                                        style=" width:80px;height:80px"
                                                        src="{{ asset('img/whatsapp.svg') }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="des" src="img/invites.png" style="width:25rem;" alt="">
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <button type="button" class="close" data-dismiss="alert">+</button>
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">+</button>
                <strong>{{Session::get('success')}}</strong>
            </div>
            @endif
            <div class="row">

                <!-- Left col -->
                <div class="col-lg-6 col-md-6 col-sm-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h4 style="font-weight:bold">
                                Pretende vender um imóvel?
                            </h4>
                            <p>Connosco irá recuperar parte da comissão imobiliária</p>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">

                                <form class="form-card" method="post" action="{{ url('sendemail/send') }}">
                                    {{ csrf_field() }}
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Distrito<span class="text-danger">
                                                    *</span></label> <select name="distrito">
                                                    <option selected value="Selecionar"></option>
                                                <option value="Lisboa">Lisboa</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Concelho<span class="text-danger">
                                                    *</span></label>
                                            <select name="concelho">
                                            <option selected value="Selecionar"></option>
                                                <option value="Amadora">Amadora</option>
                                                <option value="Cascais">Cascais</option>
                                                <option value="Lisboa">Lisboa</option>
                                                <option value="Oeiras">Oeiras</option>
                                                <option value="Odivelas">Odivelas</option>
                                                <option value="Sintra">Sintra</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Freguesia<span class="text-danger">
                                                    *</span></label><input type="text" name="freguesia"></div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Natureza<span class="text-danger">
                                                    *</span></label> <input type="text" id="fname" name="natureza">
                                        </div>
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Tipologia<span class="text-danger">
                                                    *</span></label> <input type="text" id="lname" name="tipologia">
                                        </div>
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Valor<span class="text-danger">
                                                    *</span></label> <input type="text" id="lname" name="valor"> </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-12 flex-column d-flex"> <label
                                                class="form-control-label px-3">Descrição</label><textarea id="txtArea"
                                                rows="6" name="descricao" value="Descrição"></textarea> </div>
                                    </div>
                                    <div style="display:none;"><input type="text" id="lname" name="nome"
                                            value="{{Auth::user()->name}}"> </div>

                                    <div style="display:none;"><input type="text" id="lname" name="email"
                                            value="{{Auth::user()->email}}"> </div>


                                    <div class="row justify-content-end">
                                        <div class="form-group col-sm-6"> <button type="submit"
                                                class="login100-form-btn">
                                                Submeter
                                            </button> </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- Left col -->
                <div class="col-lg-6 col-md-6 col-sm-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h4 style="font-weight:bold">
                                Pretende comprar um imóvel?
                            </h4>
                            <p>Terá direito a parte da comissão imobiliária</p>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <form class="form-card" method="post" action="{{ url('sendemail/sendCompra') }}">
                                    {{ csrf_field() }}
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Distrito<span class="text-danger">
                                                    *</span></label> <select name="distrito">
                                                    <option selected value="Selecionar"></option>
                                                <option value="Lisboa">Lisboa</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Concelho<span class="text-danger">
                                                    *</span></label>
                                            <select name="concelho">
                                                <option selected value="Selecionar"></option>
                                                <option  value="Amadora">Amadora</option>
                                                <option  value="Cascais">Cascais</option>
                                                <option value="Lisboa">Lisboa</option>
                                                <option value="Oeiras">Oeiras</option>
                                                <option value="Odivelas">Odivelas</option>
                                                <option value="Sintra">Sintra</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Freguesia<span class="text-danger">
                                                    *</span></label><input type="text" name="freguesia"></div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                                class="form-control-label px-3">Orçamento<span class="text-danger">
                                                    *</span></label> <input type="text" name="orcamento">
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                                class="form-control-label px-3">Tipologia<span class="text-danger">
                                                    *</span></label> <input type="text" name="tipologia">
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-12 flex-column d-flex"> <label
                                                class="form-control-label px-3">Descreva-nos o que
                                                procura</label><textarea id="txtArea" name="descricao" value="Descrição"
                                                rows="6"></textarea> </div>
                                    </div>
                                    <div style="display:none;"><input type="text" id="lname" name="nome"
                                            value="{{Auth::user()->name}}"> </div>

                                    <div style="display:none;"><input type="text" id="lname" name="email"
                                            value="{{Auth::user()->email}}"> </div>

                                    <div class="row justify-content-end">
                                        <div class="form-group col-sm-6"> <button type="submit"
                                                class="login100-form-btn">
                                                Submeter
                                            </button> </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.Left col -->
            </div><!-- /.container-fluid -->
    </section>


</div>




@endsection