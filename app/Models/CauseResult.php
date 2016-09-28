<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauseResult extends Model {

	protected $table = 'cause_results';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}