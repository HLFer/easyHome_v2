<?php

namespace easyHome\Providers;

//use Illuminate\Support\Facades\Gate as GateContract;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'easyHome\Model' => 'easyHome\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        //Checagem de Usuário Administrador
        //Retorna true se o usuario é administrador
        $gate->define('isAdmin', function($user){
            return $user->user_type == 'admin';
        });

        //Checagem de Usuário Comum
        //Retorna true se o usuário é comum
        $gate->define( 'isdweller', function ($user) {
            return $user->user_type == 'dweller';
        });
    }
}
