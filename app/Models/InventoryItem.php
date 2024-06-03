<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;
    protected $fillable = ['name','quantity','price'];

    public function isLowStock()
    {
        return $this->quantity <10; // Примерный порог для уровная запасов
    }
}
