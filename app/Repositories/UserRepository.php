<?php

namespace CodeFlix\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface UserRepository
 * @package namespace CodeFlix\Repositories;
 */
interface UserRepository extends RepositoryInterface
{
    public function updatePassword($password, $id);
}
