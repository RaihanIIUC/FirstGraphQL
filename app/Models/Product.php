<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'user_id', 'price', 'description'
    ];

     

       
         public function product_images()
         {
             return $this->hasMany(ProductImage::class);
         }

         /**
          * Get the user that owns the Product
          *
          * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
          */
         public function users()
         {
             return $this->belongsTo(User::class, 'user_id');
         }
}
