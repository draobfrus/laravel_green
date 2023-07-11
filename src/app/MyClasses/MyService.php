<?php

namespace App\MyClasses;

class MyService implements MyServiceInterface
{
    private $id;
    private $msg = 'no id ...';
    private $data = ['Hello', 'Welcome', 'Bye'];

    public function __construct(int $id = -1)
    {
        $this->setId($id);
    }

    public function setId(int $id)
    {
        $this->id = $id;
        if ($id >= 0 && $id < count($this->data))
        {
            $this->msg = 'select id:' . $id . ', data: "' . $this->data($id) . '"';
        }
    }

    public function say()
    {
        return $this->msg;
    }

    public function data(int $id)
    {
        return $this->data[$id];
    }

    public function allData()
    {
        return $this->data;
    }
}
