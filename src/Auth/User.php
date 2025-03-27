<?php

namespace Axcel\Halo\Auth;

use Axcel\Halo\Eloquent\Foundations\Model;
use Axcel\Halo\Auth\Contracts\AuthenticatableContract;
use Axcel\Halo\Auth\Contracts\CanResetPasswordContract;
use Axcel\Halo\Auth\Passwords\CanResetPassword;

class User extends Model implements
    AuthenticatableContract,
    CanResetPasswordContract
{
    use Authenticatable, MustVerifyEmail, CanResetPassword;
}
