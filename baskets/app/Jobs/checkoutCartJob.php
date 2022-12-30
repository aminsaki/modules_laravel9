<?php

namespace App\Jobs;

use App\Models\Basekt;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class checkoutCartJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public  $data)
    {

    }

    /**
     * Execute the job.
     *
     * @return mixed[]
     */
    public function handle()
    {
         echo "add to bases;";
        $query = Basekt::query();
        $query->when($this->data['user_id'],function($userId, $q){
           return $q->where(['user_id'=> $userId]);
        });
        $query->when($this->data['product_id'],function($productId , $q){
            return $q->where(['product_id'=>$productId ]);
        });
        return $query->get()->toArray();

    }
}
