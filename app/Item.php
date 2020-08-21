<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    protected $fillable =[
    	'codeno','name','photo','price','discount','description','brand_id','subcategory_id'
    ];


    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function subcategory(){
    	return $this->belongsTo('App\subcategory');
    }

    public function orders(){
    	return $this->belongsTo('App\Order','orderdetails','order_id','item_id')->withPivot('qty')->withTimestamps();
    }
}
