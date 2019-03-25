<?php

namespace Engine\Core\Auth;

use Engine\Helper\Cookie;

class Auth implements AuthInterface
{
    public $autorized = false;

    protected $user;

    /**
     * @return bool
     */
    public function autorized()
    {
        return $this->autorized;
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->user;
    }

    /**
     * @param $user
     */
    public function autorize($user)
    {
        Cookie::set(auth.autorized, true);
        Cookie::set(auth.user, $user);

        $this->autorized = true;
        $this->user = $user;
    }

    /**
     *
     */
    public function unAutorize()
    {
        Cookie::delete('auth.autorized');
        Cookie::delete('auth.user');

        $this->autorized = false;
        $this->user = null;
    }

    /**
     * @return string
     */
    public static function salt()
    {
        return (string) rand(10000000, 99999999);
    }

    /**
     * @param $password
     * @param string $salt
     * @return string
     */
    public static function encryptPassword($password, $salt = '')
    {
        return hash('sha256', $password . $salt);
    }
}