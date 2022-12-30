<?php

namespace App\Jobs;

use App\Models\Basekt;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProducJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct(public $data)
    {
    }

    /**
     * Execute the job.
     *
     * @return string
     */
    public function handle()
    {
        echo " receive 'Hello World!'\n";
       $result =  Basekt::create($this->data);
       if($result){
           return "True";
       }

    }
}
