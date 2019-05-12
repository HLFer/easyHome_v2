@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 align="center">Cozinha</h3>
            </div>
            <div>
                <a class="btn btn-warning" href="/ligths" title="Ligar Lâmpada"><i class="fas fa-lightbulb fa-3x"></i></a>
            </div>

            <div>
                <a class="btn btn-warning" href="/ligths" title="Ligar Ventilador"><i class="fas fa-snowflake fa-3x"></i></a>
            </div>

            <a class="btn btn-info" href="/rooms">Voltar<a>
        </div>
    </div>
</div>
@endsection