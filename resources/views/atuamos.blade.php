@extends('layouts.nav')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h2 class="m-0">Onde atuamos</h2>
                    <li>Amadora</li>
                    <li>Cascais</li>
                    <li>Lisboa</li>
                    <li>Oeiras</li>
                    <li>Sintra </li>

                </div><!-- /.col -->
                <div class="col-sm-8 col-md-8">
                <div style="overflow:hidden;resize:none;max-width:100%;width:800px;height:500px;"><div id="canvasfor-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Carcavelos&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemap-code-enabler" href="https://www.embed-map.com" id="authorizemap-data">https://www.embed-map.com</a><style>#canvasfor-googlemap img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style></div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    

</div>

@endsection