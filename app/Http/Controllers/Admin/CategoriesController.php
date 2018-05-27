<?php

namespace CodeFlix\Http\Controllers\Admin;

use CodeFlix\Forms\CategoryForm;
use CodeFlix\Models\Category;
use CodeFlix\Repositories\UserRepository;
use Illuminate\Http\Request;
use CodeFlix\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\Form;

class CategoriesController extends Controller
{

    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->repository
            ->orderBy('id', 'DESC')
            ->paginate(15);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $form = \FormBuilder::create(CategoryForm::class, [
            'url' => route('admin.categories.store'),
            'method' => 'POST'
        ]);
        return view('admin.categories.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        /** @var Form $form */
        $form = \FormBuilder::create(CategoryForm::class);
        $this->checkIsFormValid($form);
        $data = $form->getFieldValues();
        $this->repository->create($data);
        $request->session()->flash('message', 'Categoria criada com sucesso!');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->repository->find($id);
        return view('admin.categories.show', compact('category', $category->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->repository->find($id);
        $form = \FormBuilder::create(CategoryForm::class, [
            'url' => route('admin.categories.update', ['category' => $category->id]),
            'method' => 'PUT',
            'model' => $category
        ]);
        return view('admin.categories.edit', compact('form', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /** @var Form $form */
        $form = \FormBuilder::create(CategoryForm::class);
        $this->checkIsFormValid($form);
        $data = $form->getFieldValues();
        $this->repository->update($data, $id);

        $request->session()->flash('message', 'Categoria alterada com sucesso!');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $this->repository->delete($id);
        $request->session()->flash('message', 'Categoria removida com sucesso!');
        return redirect()->route('admin.categories.index');
    }

    /**
     * @param $form
     * @return $this
     */
    private function checkIsFormValid($form)
    {
        if (!$form->isValid()) {
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }
    }
}
