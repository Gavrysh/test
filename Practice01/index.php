<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Member
{
    public $userName = 'Fred';
    private $loggedIn = false;

    public function login()
    {
        $this->loggedIn = true;
    }

    public function logout()
    {
        $this->loggedIn = false;
    }

    public function isLoggedIn()
    {
        return $this->loggedIn;
    }
}

$member = new Member();
$member->userName = 'Helen';
echo $member->userName.' is: '.($member->isLoggedIn() ? 'logged in' : 'logged out').'<br>';
$member->login();
echo $member->userName.' is: '.($member->isLoggedIn() ? 'logged in' : 'logged out').'<br>';
$member->logout();
echo $member->userName.' is: '.($member->isLoggedIn() ? 'logged in' : 'logged out').'<br>';