@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-9 col-sm-3 pull-left">
            <div class="card">
                <h3 align="center">Acesso aos cômodos</h3>
            </div>
            <div class="row justify-content-center">
                <div>
                    <a class="btn btn-warning" href="/kitchen" title="Cozinha"><i class="fas fa-utensils fa-3x"></i></a>
                </div>
                <div>
                    <a class="btn btn-warning" href="/bedroom" title="Quarto"><i class="fas fa-bed fa-3x"></i></a>
                </div>
                <div>
                    <a class="btn btn-warning" href="/bathroom" title="Banheiro"><i class="fas fa-bath fa-3x"></i></a>
                </div>

                <div>
                    <a class="btn btn-warning" href="/livingroom" title="Sala de Estar"><i class="fas fa-couch fa-3x"></i></i></a>
                </div>

            </div>
            <a class="btn btn-info" href="/home">Voltar<a>
        </div>
    </div>
</div>
@endsection