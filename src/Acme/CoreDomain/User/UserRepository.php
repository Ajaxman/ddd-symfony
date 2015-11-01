<?php
namespace Acme\CoreDomain\User;

interface UserRepository
{
    public function find(UserId $id);

    public function findAll();

    public function add(User $user);

    public function remove(User $user);
}
