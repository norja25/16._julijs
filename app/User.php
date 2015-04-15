<?php namespace Modelbook;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Illuminate\Support\Facades\Input;
use Kodeine\Acl\Traits\HasRole;
use Laracasts\Presenter\PresentableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent;
use Modelbook\Events\UserHasRegistred;
use Event;

/**
 * Class User
 * @package Modelbook
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract, SluggableInterface {

	use Authenticatable, CanResetPassword, PresentableTrait, SluggableTrait, HasRole;

    /**
     * @var array
     */
    protected $sluggable = array(
        'build_from' => ['user_firstname', 'user_lastname'],
        'save_to'    => 'user_slug',
        'separator'  => '.',
        'unique'     => true,
    );
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    /**
     * @var string
     */
    protected $presenter = 'Modelbook\Presenters\UserPresenter';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_firstname', 'user_lastname', 'email', 'user_phone', 'user_slug', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * Generates password for user before form submit
     * @param $password
     */

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }


    /**
     * @param $user_firstname
     * @param $user_lastname
     * @param $email
     * @param $password
     * @param $user_phone
     * @return static
     */
    public static function register($user_firstname, $user_lastname, $email, $password, $user_phone)
    {
        $user = new static(compact('user_firstname', 'user_lastname', 'email', 'password', 'user_phone'));

      //  $user = Event::fire(new UserRegistred($user));
  event(new UserHasRegistred($user, $password));

        return $user;
    }

    public function profile()
    {
        return $this->hasOne('UserProfile');
    }

}
