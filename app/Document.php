<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model {

	protected $table = 'documents';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}