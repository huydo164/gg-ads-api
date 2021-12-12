<?php

namespace App\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->app = new App();
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $model = $this->app->make($this->getModel());
        if (!$model instanceof Model) {
            throw new \Exception("Class {$this->getModel()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        return $this->model = $model;
    }
}
