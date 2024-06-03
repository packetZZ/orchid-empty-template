<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['type','amount','description'];
// Типы транзакций
    const TYPE_INCOME = 'income';
    const TYPE_EXPENSE = 'expense';
//Фильтрация транзакций по типу
    public function scopeIncome($query)
    {
        return $query->where('type', self::TYPE_INCOME);
    }
    public function scopeExpense($query)
    {
        return $query->where('type', self::TYPE_EXPENSE);
    }
}
