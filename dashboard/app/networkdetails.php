<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class networkdetails extends Model
{
    protected $table = "network_details";
    protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
