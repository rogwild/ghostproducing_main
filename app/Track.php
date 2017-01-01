<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model {
    
        protected $fillable = ['name','genre', 'price', 'bpm', 'sequencer', 'key', 'user_id', 'coverfilename', 'cover', 'coverimagedata'];

	public function by(User $user) {
            $this->user_id = $user->id;
        }
        
        public function user() {
            return $this->belongsTo(User::class);
        }

}
