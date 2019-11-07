<?php

namespace App\Http\Controllers;

use App\Girl;
use App\Http\Requests\createModelRequest;
use App\Http\Requests\SearchModelRequest;
use App\Http\Requests\UpdateModelRequest;
use App\Service\ModelServiceInterface;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class ModelController extends Controller
{
    public $modelService;

    public function __construct(ModelServiceInterface $modelService)
    {
        $this->modelService = $modelService;
    }

    public function index()
    {
        $models = $this->modelService->getAll();

        return view('model.index', compact('models'));
    }

    public function manager()
    {
        if (!Gate::allows('crud-user')) {
            abort(403, 'Bạn không có quyền');

        }
        $models = $this->modelService->getAll();
        return view('model.manager', compact('models'));
    }

    public function create()
    {
        if (Gate::allows('crud-user')) {
            return view('model.create');

        }
        abort(403, 'Bạn không có quyền');
    }

    public function store(createModelRequest $request)
    {
        $this->modelService->add($request);

        return redirect()->route('model.manager');
    }

    public function delete($id)
    {
        $this->modelService->delete($id);
        return redirect()->route('model.manager');
    }

    public function edit($id)
    {
        if (!Gate::allows('crud-user')) {
            abort(403, 'Bạn không có quyền');
        }
        $model = $this->modelService->findById($id);
        return view('model.edit', compact('model'));
    }

    public function update(UpdateModelRequest $request, $id)
    {
        $this->modelService->edit($request, $id);

        return redirect()->route('model.manager');
    }

    public function search(SearchModelRequest $request)
    {
        if (Gate::allows('crud-user')) {
            $DBSearch = $this->modelService->search($request);
            return view('model.search', compact('DBSearch'));

        } else {
            $DBSearch = $this->modelService->search($request);
            return view('model.searchIndex', compact('DBSearch'));
        }

    }

    public function desc($id)
    {
        $modelKey = 'model_' . $id;

        Girl::where('id', $id)->increment('view_count');
        Session::put($modelKey, 1);

        $model = $this->modelService->findById($id);

        return view('model.description', compact('model'));
    }

    public function addToLikes($id)
    {
        $girl = Girl::find($id);
        $userLogin = Auth::id();
        $userKey = 'user_' . Auth::id();
        if (!Session::has($userKey)) {
            Session::put($userKey, [$id]);

            if ($girl->users) {
                foreach ($girl->users as $user) {
                    if ($user->id !== $userLogin) {
                        $girl->users()->attach(Auth::id());

                    }
                }
            }
        }

        $models = $this->modelService->getAll();

        return view('model.index', compact( 'girl', 'models'));

    }
}
