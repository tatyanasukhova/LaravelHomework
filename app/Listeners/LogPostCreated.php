<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Support\Facades\Log;

class LogPostCreated
{
    public function handle(PostCreated $event): void
    {
        Log::info('Новое сообщение создано: ' . $event->post->title);
    }
}