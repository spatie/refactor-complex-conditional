<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function ship()
    {
        if (! ((($this->shipping_country) == "GB") || strcmp($this->status, "Valid" !== 0))) {
            return true;
        }

        return false;
    }
}
