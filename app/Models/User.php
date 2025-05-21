<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var list<string>
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
     */
    protected $fillable = [
        'name',
        'email',
<<<<<<< HEAD
=======
        'auth_provider',
        'auth_provider_id',
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var list<string>
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
<<<<<<< HEAD

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    public function profile()
{
    return $this->hasOne(ProfileUser::class);
}


public function orders()
{
    return $this->hasMany(Order::class);
}

=======
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
}
