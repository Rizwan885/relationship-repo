<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    Relation::morphMap([
            "students"=>"App\Models\Student",
            "teachers"=>"App\Models\Teacher",
        ]);
      
    }
}

// App\Models\ProfileOneThrough::whereHasMorph(
//     'profileable',
//     'App\Student',
//     function($q){
//     $q->where('email','like','stu1@gmail.com%');
//     }
// )->get();

