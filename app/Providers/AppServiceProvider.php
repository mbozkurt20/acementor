<?php

namespace App\Providers;

use App\View\Components\Calendly;
use App\View\Components\Comments;
use App\View\Components\ConsultantVideos;
use App\View\Components\Deals;
use App\View\Components\FrequentlyAskedQuestions;
use App\View\Components\Promotion;
use App\View\Components\Services;
use App\View\Components\StudentReview;
use App\View\Components\Teams;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
//        Blade::componentNamespace('consultant-videos', ConsultantVideos::class);
//        Blade::componentNamespace('deals', Deals::class);
//        Blade::componentNamespace('promotion', Promotion::class);
//        Blade::componentNamespace('comments', Comments::class);
//        Blade::componentNamespace('student-review', StudentReview::class);
//        Blade::componentNamespace('sss', FrequentlyAskedQuestions::class);
//        Blade::componentNamespace('calender', Calendly::class);
//        Blade::componentNamespace('teams', Teams::class);
//        Blade::componentNamespace('service', Services::class);
    }
}
