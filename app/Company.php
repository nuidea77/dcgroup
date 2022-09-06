<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Company extends Model
{

    protected $table = 'companies';
    use Translatable;
	protected $translatable = ['name', 'description', 'location', 'uua'];
}
