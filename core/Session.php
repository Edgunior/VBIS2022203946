<?php

namespace app\core;

class Session
{
    public function __construct()
    {
        session_start();

        $flashMessages = [];

        if ($this->get(Constant::$flash_session))
            $flashMessages = $_SESSION[Constant::$flash_session];

        foreach ($flashMessages as $key => &$flashMessage)
        {
            $flashMessage['remove'] = true;
        }

        $_SESSION[Constant::$flash_session] = $flashMessages;
    }

    public function setFlash($key, $value)
    {
        $_SESSION[Constant::$flash_session][$key] = [
            'remove' => false,
            'message' => $value
        ];
    }

    public function getFlash($key)
    {
        return $_SESSION[Constant::$flash_session][$key]['message'] ?? false;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key] ?? false;
    }

    public function remove($key)
    {
        unset($_SESSION[$key]);
    }

public function checkRole($role): bool
{
    $loggedInUser = $this->get(Constant::$auth_session);

    if ($loggedInUser !== false && isset($loggedInUser->roles) && is_array($loggedInUser->roles)) {
        return in_array($role, $loggedInUser->roles);
    }

    return false;
}



    public function __destruct()
    {
        $flashMessages = [];

        if ($this->get(Constant::$flash_session))
            $flashMessages = $_SESSION[Constant::$flash_session];

        foreach ($flashMessages as $key => &$flashMessage)
        {
            if ($flashMessage['remove'])
                unset($flashMessages[$key]);
        }

        $_SESSION[Constant::$flash_session] = $flashMessages;
    }
}