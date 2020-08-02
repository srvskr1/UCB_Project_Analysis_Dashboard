<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resourcs_name extends Model
{
    protected $table = "resource_name";
    protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
