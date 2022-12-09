<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
use App\Models\product_category;
use App\Models\category_per_product;

class product_category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'product_category';
/*    protected $primaryKey = 'id';*/
    protected $fillable = ['id','title'];

    public function category_per_product()
    {
        return $this->hasMany(category_per_product::class, 'productcategory_id','id');
  
/*        return $this->hasMany(category_per_product::class, 'id', 'product_id','productcategory_id');*/
    }
}
