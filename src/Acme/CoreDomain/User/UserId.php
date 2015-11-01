<?php
namespace Acme\CoreDomain\User;

/**
 * @package Acme\CoreDomain\User
 * @author
 */
class UserId
{
    private $value;

    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    /**
     * @return String
     */
    public function getValue()
    {
        return $this->value;
    }

}
