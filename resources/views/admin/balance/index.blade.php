@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
    </ol>
@stop

@section('content')
    <div class = "box">
        <div class = "box-header">
            <a href="" class="btn btn-primary"> <i class ="fa fa-cart-plus" aria-hidden="true"></i> Recarregar</a>
            <a href="" class="btn btn-danger">  <i class ="fa fa-cart-arrow-down" aria-hidden="true"></i> Sacar</a>

        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Saldo</span>
                    <span class="info-box-number">R$ 90,00 </span>
                    <a href="#" class="small-box-footer">Ver histórico <i class ="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

                
            </div>
        </div>
        
    </div>
@stop