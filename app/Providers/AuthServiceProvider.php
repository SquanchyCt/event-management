<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider{

    // @var array<class-string, class-string>

    protected $policies = [
        //
    ];

    public function boot(): void{
    //     Gate::define('update-event', function($user, Event $event){
    //         return $user->id == $event->user_id;
    //     });

    //     Gate::define('delete-attendee', function($user, Event $event, Attendee $attendee){
    //         return $user->id == $event->user_id ||
    //             $user->id == $attendee->user_id;
    //     });
    }
}
