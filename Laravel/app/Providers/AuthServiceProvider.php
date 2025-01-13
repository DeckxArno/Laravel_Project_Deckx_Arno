<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\ProfilePolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * De toewijzingen voor modelbeleid van de applicatie.
     *
     * @var array
     */
    protected $policies = [
        User::class => ProfilePolicy::class,
    ];
    

    /**
     * Registreer alle services gerelateerd aan authenticatie en autorisatie.
     */
    public function boot()
    {
        $this->registerPolicies();

        // Je kunt hier aanvullende Gates of policies registreren als dat nodig is.
    }
}
