<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauseHelpers extends Model {

	protected $table = 'cuase_helpers';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}