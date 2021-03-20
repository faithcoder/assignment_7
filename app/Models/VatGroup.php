<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VatGroup extends Model
{
    use HasFactory;

    public function vat_group(){
        return $this->hasMany(Product::class);
    }
}
