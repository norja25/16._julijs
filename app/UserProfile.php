<?php namespace Modelbook;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

    protected $fillable = ['user_id', 'user_profile_image', 'gender', 'user_birthday'];
	//
    public function user()
    {
        return $this->belongsTo('User');
    }
}
