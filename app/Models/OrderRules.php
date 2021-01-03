<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderRules extends Model
{
    use HasFactory;
    protected $table = 'order_rules';
    
    
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
    public function unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }
}
