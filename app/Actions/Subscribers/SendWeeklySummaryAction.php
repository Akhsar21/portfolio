<?php

namespace App\Actions\Subscribers;

use App\Actions\Posts\LatestPostAction;
use App\Mail\WeeklySummary;
use Illuminate\Support\Facades\Mail;

class SendWeeklySummaryAction
{
    protected $getActiveSubscribers;
    protected $latestPostAction;

    public function __construct(GetActiveSubscribers $getActiveSubscribers, LatestPostAction $latestPostAction)
    {
        $this->getActiveSubscribers = $getActiveSubscribers;
        $this->latestPostAction = $latestPostAction;
    }

    public function run()
    {
        $subscribers = $this->getActiveSubscribers->run();
        $posts = $this->latestPostAction->run();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber)->queue(new WeeklySummary($subscriber, $posts));
        }
    }
}
