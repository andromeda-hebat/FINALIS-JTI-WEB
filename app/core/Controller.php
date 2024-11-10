<?php

class Controller {
    public Model $model;

    public function __construct(string $model) {
        // get the selected model
        require __DIR__ .'/../model/'. $model .'.php';
        $this->$model = new $model;
    }

    public function getModel(): Model {
        return $this->model;
    }

    public function view(string $view, array $data = []): void {
        require __DIR__ . '/../views/' . $view .'.php';
    }
}
