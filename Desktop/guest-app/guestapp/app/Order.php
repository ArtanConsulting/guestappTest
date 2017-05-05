<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
        'o_fleisch', 'nr_fleisch', 'nr_vegi', 'votes', 'o_wochenhit', 'nr_wochenhit', 'o_sallatteller', 'nr_sallatteller', 'o_gemischtersallatte', 'nr_gemischtersallatte', 'o_suppe', 'nr_suppe', 'done', 'user_id', 'day_id', 'comments',
    ];


    public function by(User $user)
    {
          $this->user_id =$user->id;
    }

     public function day()
    {
        return $this->belongsTo('App\Day');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


