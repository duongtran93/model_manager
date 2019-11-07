<?php


namespace App\Service\imple;


use App\Girl;
use App\Reprositories\ModelRepositoryInterface;
use App\Service\ModelServiceInterface;
use Illuminate\Support\Facades\Storage;

class ModelService implements ModelServiceInterface
{
    protected $modelRepository;

    public function __construct(ModelRepositoryInterface $modelRepository)
    {
        $this->modelRepository = $modelRepository;
    }

    function getAll()
    {
        return $this->modelRepository->index();
    }

    function findById($id)
    {
        return $this->modelRepository->findById($id);
    }

    function add($request)
    {
        $model = new Girl();
        $model->name = $request->name;
        $model->date_of_birth = $request->date;
        $model->height = $request->height;
        $model->national = $request->national;
        $model->description = $request->desc;
        $model->job = $request->job;
        if (!$request->hasFile('image')) {
            $model->image = $request->image;
        } else {
            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = $request->imageName;
            $newImageName = $imageName . time() .'.' . $imageExtension;
            $image->storeAs('public/image', $newImageName);
            $model->image = $newImageName;
        }

        $this->modelRepository->store($model);
    }

    function delete($id)
    {
        $model = $this->modelRepository->findById($id);
        Storage::delete('public/image/'. $model->image);
        $this->modelRepository->destroy($model);
    }

    function edit($request, $id)
    {
        $model = $this->modelRepository->findById($id);

        $model->name = $request->name;
        $model->date_of_birth = $request->date;
        $model->height = $request->height;
        $model->national = $request->national;
        $model->description = $request->desc;
        $model->job = $request->job;
        if ($request->image) {
            Storage::delete('public/image/'. $model->image);
            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = $request->imageName;
            $newImageName = $imageName . time() .'.' . $imageExtension;
            $image->storeAs('public/image', $newImageName);
            $model->image = $newImageName;
        }
        $this->modelRepository->update($model);
    }

    function search($request)
    {
        $keyword = $request->search;
        return $this->modelRepository->search($keyword);
    }
}
