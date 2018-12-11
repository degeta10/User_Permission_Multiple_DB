<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'see_menu',
        'see_bar',
        'see_title',
        'see_hello',
    ];

    public function __construct() {
        if ( Auth::check() ) {
        $this->connection = Auth::user()->company;
        }
    }

}
