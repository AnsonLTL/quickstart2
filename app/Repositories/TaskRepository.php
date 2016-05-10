<?php
/**
 * Created by PhpStorm.
 * User: thyelee
 * Date: 02/04/2016
 * Time: 2:31
 */

namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepository
{
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}