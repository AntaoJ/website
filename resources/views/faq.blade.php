@extends('layouts.nav')

@section('content')


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="m-0">Perguntas Frequentes</h2>
    
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
        <div class="container">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
               
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="1">
                        <h3 class="panel-title">
                            <a class="collapsed colorti" role="button" title="" data-toggle="collapse"
                                data-parent="#accordion" href="#collapse1" aria-expanded="true"
                                aria-controls="collapse1">
                                Titullooocgvh rrdftgh
                            </a>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                        <div class="panel-body px-3 mb-4">
                            <p>sxdcfvgbhnjmkc fgvbnfc fvbnm

                            </p>
                            
                        </div>
                    </div>
                </div>
              
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="1">
                        <h3 class="panel-title">
                            <a class="collapsed colorti" role="button" title="" data-toggle="collapse"
                                data-parent="#accordion" href="#collapse1" aria-expanded="true"
                                aria-controls="collapse1">
                                Titullooocgvh rrdftgh
                            </a>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                        <div class="panel-body px-3 mb-4">
                            <p>sxdcfvgbhnjmkc fgvbnfc fvbnm

                            </p>
                            
                        </div>
                    </div>
                </div>
      
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="1">
                        <h3 class="panel-title">
                            <a class="collapsed colorti" role="button" title="" data-toggle="collapse"
                                data-parent="#accordion" href="#collapse1" aria-expanded="true"
                                aria-controls="collapse1">
                                Titullooocgvh rrdftgh
                            </a>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                        <div class="panel-body px-3 mb-4">
                            <p>sxdcfvgbhnjmkc fgvbnfc fvbnm

                            </p>
                            
                        </div>
                    </div>
                </div>
      
            </div>

        </div>
    </section>

    <style>
    h2 {
        font-family: Arial, Verdana;
        font-weight: 800;
        font-size: 1.5rem;
        color: #091f2f;
    }

    .accordion-section .panel-default>.panel-heading {
        border: 0;
        background: #fff;
        padding: 0;
        border:1.5px solid #000;
    }

    .accordion-section .panel-default .panel-title a {
        display: block;
        font-style: italic;
        font-size: 1rem;
    }

    .accordion-section .panel-default .panel-title a:after {
        ~color: #000;
        content: '\f057';
        /* You should use \ and not /*/
        font-family: "Font Awesome 5 Free";
        /* This is the correct font-family*/
        font-style: normal;
        font-weight: normal;
        font-size: 30px;
        float: right;
        margin-top: -4px;
    }

    .accordion-section .panel-default .panel-title a.collapsed:after {
        content: "\f358";
    }

    .accordion-section .panel-default .panel-body {
        font-size: 1rem;
    }

    .colorti {
        color: #000 !important;
    }
    </style>

</div>
</div>
@endsection