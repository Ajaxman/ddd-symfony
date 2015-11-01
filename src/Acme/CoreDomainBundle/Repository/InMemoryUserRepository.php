<?php
namespace Acme\CoreDomainBundle\Repository;

use Acme\CoreDomain\User\UserRepository;
use Acme\CoreDomain\User\UserId;
use Acme\CoreDomain\User\User;

class InMemoryUserRepository implements UserRepository
{
    private $users;

    public function __construct()
    {
        $this->users[] = new User(
            new UserId('8CE05088'), 'Javier', 'Lopez'
        );
        $this->users[] = new User(
            new UserId('191010CFD1'), 'Pepe', 'Pecas'
        );
    }

    public function find(UserId $userId)
    {
    }

    public function findAll()
    {
        return $this->users;
    }

    public function add(User $user)
    {
    }

    public function remove(User $user)
    {
    }
}
