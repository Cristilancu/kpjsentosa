<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', "status", "role_id", "confirmation_code", "last_update", "is_admin"];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function patient()
    {
        return $this->hasOne('\App\Patient', 'user_id');
    }

    public function role()
    {
        return $this->belongsTo('\App\Role');
    }

    public function permissions()
    {
        return $this->hasMany('\App\Permission');
    }

    /**
     * This is used to check user has exist role or not
     *
     * @param $role
     */
    public function hasRole($role)
    {
        $query = \DB::table('users as u')->select('u.id');
        $query->join('roles as r', function ($join) use ($role) {
            $join->on('r.id', '=', 'u.role_id')
                ->where('r.name', '=', $role);

        });
        return $query->first();
    }

    public function hasPermission($user, $perm)
    {
        foreach ($user->permissions as $permission) {
            if($permission->name == $perm) {
                return true;
            }
        }
        return false;
    }
}