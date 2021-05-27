<?php

namespace App\Notifications;

use App\Channels\Messages\WhatsAppMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Channels\WhatsAppChannel;
use App\Models\Order;


class OrderProcessed extends Notification
{
  use Queueable;

  public $order;

  public function __construct(Order $order)
  {
    $this->order = $order;
  }

  public function via($notifiable)
  {
    return [WhatsAppChannel::class];
  }

  public function toWhatsApp($notifiable)
  {
    $orderUrl = url("/order/{$this->order->id}");
    $company = 'MatildaLaMatita';
    $deliveryDate = $this->order->created_at->addDays(4)->toFormattedDateString();


    return (new WhatsAppMessage)
        ->content("Your order from Matilda la Matita has been created.");
  }
}
