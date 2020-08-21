<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use SoftDeletes;
    protected $fillable =[
    	'orderdate','vouncherno','total','note','status','user_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function items(){
    	return $this->belongsTo('App\Order','orderdetails','order_id','item_id')->withPivot('qty')->withTimestamps();
    }
}
