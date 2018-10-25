<?php

namespace App\Models;

class Product extends Model
{
    /**
     * product Model information such as table name, and some other features we might want to use
     *
     */

    protected $table = 'products';

    protected $guarded = ['id'];

    protected $fillable = [
        'model',
        'serial_no',
        /**
         *  other fields we might need to have.
         */
    ];
}
