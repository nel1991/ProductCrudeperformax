<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\product_category;
use App\Models\Product;
use Eloquent;

class category_per_product extends Model
{
    use HasFactory;
     use SoftDeletes;
      protected $dates = ['deleted_at'];
      protected $table = 'category_per_product';
       protected $primaryKey = 'id';
       protected $fillable = ['product_id','productcategory_id'];

        public function product_category(){
            return $this->belongsTo(product_category::class);
        }
     
}
