<?php


namespace App\Reprositories\eloquent;


use App\Girl;
use App\Reprositories\ModelRepositoryInterface;

class ModelEloquentRepository implements ModelRepositoryInterface
{
    protected $model;

    public function __construct(Girl $model)
    {
        $this->model = $model;
    }

    function index()
    {
        return $this->model->paginate(6);
    }

    function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    function store($obj)
    {
        return $obj->save();
    }

    function destroy($obj)
    {
        $obj->delete();
    }

    function update($obj)
    {
        $obj->save();
    }

    function search($keyword)
    {
        return $this->model->where('name', 'LIKE', "%$keyword%")->get();
    }
}
