<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model {

	
        protected $table = 'user_infos';
        
        protected $fillable = ['phone', 'website', 'realname', 'patronymic', 'surname', 'birthday', 'about', 'jobs', 'genres', 'sequencer'];
    
        public function User() {
            return $this->belongsTo(User::class);
        }

}
