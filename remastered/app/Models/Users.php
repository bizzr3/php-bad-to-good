<?php

namespace App\Models;


class Users extends Model
{
    /**
     * product Model information such as table name, and some other features we might want to use
     *
     */

    protected $table = 'users';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'family_name',
        'email',
        /**
         *  other fields we might need to have.
         */
    ];

}
