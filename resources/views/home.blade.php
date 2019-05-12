@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seja bem-vindo ao EasyHome</div>


                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @can('isAdmin')
                    <a href="/rooms" title="Acesso aos cômodos da casa"><button><i class="fas fa-home fa-5x"></i></button></a><br>
                    <a href="/configure" title="Configurações do EasyHome"><button><i class="fas fa-users-cog fa-5x"></i></i></button></a>

                    @endcan

                    @can('isdweller')
                    <a href="/rooms" title="Acesso aos cômodos da casa"><button><i class="fas fa-home"></i></button></a>
                    @endcan


            </div>
        </div>
    </div>
</div>
@endsection