<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model {

	public function producer() {
            return $this->belongsTo('App\Producer');
        }

}
