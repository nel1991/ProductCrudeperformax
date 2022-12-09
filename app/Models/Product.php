<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
use App\Models\product_category;
use App\Models\category_per_product;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'product';
/*   protected $primaryKey = 'id';*/
    protected $fillable = ['id','title','content','image'];

    public function product_category(){

        return $this->belongsTo(product_category::class);
    }
}
