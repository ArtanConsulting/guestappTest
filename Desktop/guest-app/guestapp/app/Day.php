<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = [
        'date','day', 'fleisch',  'vegi', 'wochenhit', 'sallatteller', 'gemischtersallatte', 'suppe',
    ];
    //Day has many Order
    //Let's add a relationship
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function addOrder(Order $order, $userId)
    {
        $order->user_id = $userId;
        
        return $this->order()->save($order);
    }

    public function path()
    {
        return '/days' .$this->id;
    }
}
