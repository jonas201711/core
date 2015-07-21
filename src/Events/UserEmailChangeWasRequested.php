<?php namespace Flarum\Events;

use Flarum\Core\Users\User;

class UserEmailChangeWasRequested
{
    /**
     * The user who requested the email change.
     *
     * @var User
     */
    public $user;

    /**
     * The email they requested to change to.
     *
     * @var string
     */
    public $email;

    /**
     * @param User $user The user who requested the email change.
     * @param string $email The email they requested to change to.
     */
    public function __construct(User $user, $email)
    {
        $this->user = $user;
        $this->email = $email;
    }
}