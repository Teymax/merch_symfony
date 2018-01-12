<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 12.01.2018
 * Time: 10:20
 */

namespace App\Entity;


class Task
{
    protected $id;
    protected $id;
    protected $id;
    protected $id;
    protected $id;

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
}