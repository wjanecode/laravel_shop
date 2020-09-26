<?php

namespace App\Listeners;

use App\Events\OrderPaid;
use App\Notifications\OrderPaidNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendOrderPaidEmail {
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param OrderPaid $event
     *
     * @return void
     */
    public function handle( OrderPaid $event ) {
        //
        //获取订单信息
        $order = $event->getOrder();
        //发送通知,需要用户的notify()
        $order->user->notify( new OrderPaidNotification( $order ) );
    }
}
