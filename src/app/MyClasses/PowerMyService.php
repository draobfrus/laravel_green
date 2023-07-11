<?php

namespace App\MyClasses;

class PowerMyService implements MyServiceInterface
{
    private $id = -1;
    private $msg = 'no id ...';
    private $data = ['いちご', 'リンゴ', 'バナナ', 'みかん', 'ぶどう'];

    public function __construct()
    {
        $this->setId(rand(0, count($this->data)));
    }

    public function setId(int $id)
    {
        // もし引数$idの値が0以上5未満なら以下の処理を行う
        if ($id >= 0 && $id < count($this->data) - 1)
        {
            $this->id = $id;
            $this->msg = 'あなたが好きなのは、' . $id . '番の' . $this->data[$id] . 'ですね！';
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

    public function setData($data)
    {
        $this->data = $data;
    }

    public function allData()
    {
        return $this->data;
    }
}
