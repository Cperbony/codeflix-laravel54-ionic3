<?php

namespace CodeFlix\Http\Controllers\Admin;

use CodeFlix\Forms\UserPasswordForm;
use CodeFlix\Forms\UserForm;
use CodeFlix\Models\User;
use CodeFlix\Repositories\UserRepository;
use Illuminate\Http\Request;
use CodeFlix\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\Form;

class UsersController extends Controller
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
        $users = $this->repository->paginate();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $form = \FormBuilder::create(UserForm::class, [
            'url' => route('admin.users.store'),
            'method' => 'POST'
        ]);
        return view('admin.users.create', compact('form'));
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
        $form = \FormBuilder::create(UserForm::class);
        $this->checkIsFormValid($form);
        $data = $form->getFieldValues();
        $this->repository->create($data);
        $request->session()->flash('message', 'Usuário criado com sucesso!');
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \CodeFlix\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CodeFlix\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $form = \FormBuilder::create(UserForm::class, [
            'url' => route('admin.users.update', ['user' => $user->id]),
            'method' => 'PUT',
            'model' => $user
        ]);
        return view('admin.users.edit', compact('form'));
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
        $form = \FormBuilder::create(UserForm::class, [
            'data' => ['id' => $id]
        ]);
        $this->checkIsFormValid($form);
        $data = array_except($form->getFieldValues(), ['password', 'role']);
        $this->repository->update($data, $id);

        $request->session()->flash('message', 'Usuário alterado com sucesso!');
        return redirect()->route('admin.users.index');
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
        $request->session()->flash('message', 'Usuário removido com sucesso!');
        return redirect()->route('admin.users.index');
    }

//    /**
//     * @return UsersController
//     */
//    public function changePassword()
//    {
//        $form = \FormBuilder::create(PasswordForm::class, [
//            'url' => route('admin.users.update-password'),
//            'method' => 'put'
//        ]);
//        return view('admin.users.change-password', compact($form));
//    }
//
//    /**
//     * @return UsersController
//     */
//    public function updatePassword()
//    {
//        $form = \FormBuilder::create(PasswordForm::class);
//        $this->checkIsFormValid($form);
//        $data = array_only($form->getFieldValues(), ['password']);
//        $this->repository->updatePassword($data, \Auth::user()->id);
//        \Session::flash('success', 'Senha Alterada com Sucesso!');
//        return redirect()->route('admin.users.index');
//    }

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
