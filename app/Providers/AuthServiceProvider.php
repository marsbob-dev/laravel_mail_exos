<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('deletePost',function(User $user, $post){
            return $user->id == $post->user_id;
        });

        Gate::define('deleteUser',function(User $user, $profile){
            if ($user->role_id == 2 && $profile->role_id != 2) {
                return true;
            } else {
                return false;
            }
        });
    }
}
