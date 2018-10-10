<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    //
    protected $table = 'feature_product';
     protected $fillable = ['feature_id', 'feature_deatils_id', 'product_id','price'];

      public function featuredetails()
    {
        return $this->belongsTo('App\FeatureDetails');
    }
       public function feature()
    {
        return $this->belongsTo('App\Feature');
    } 
        public function product()
    {
        return $this->belongsTo('App\product');
    } 
}
