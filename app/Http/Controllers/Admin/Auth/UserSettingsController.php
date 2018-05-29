<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 27/05/2018
 * Time: 16:02
 */

namespace CodeFlix\Http\Controllers\Admin\Auth;

use CodeFlix\Forms\UserPasswordForm;
use CodeFlix\Http\Controllers\Admin\UsersController;
use CodeFlix\Repositories\UserRepository;

class UserSettingsController
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
     * @return UsersController
     */
    public function changePassword()
    {
        $form = \FormBuilder::create(UserPasswordForm::class, [
            'url' => route('admin.users-settings.update-password'),
            'method' => 'put'
        ]);
        return view('admin.users-settings.change-password', compact('form'));
    }

    /**
     * @return UsersController
     */
    public function updatePassword()
    {
        $form = \FormBuilder::create(UserPasswordForm::class);
        $this->checkIsFormValid($form);
        $data = array_only($form->getFieldValues(), ['password']);
        $this->repository->updatePassword($data, \Auth::user()->id);
        \Session::flash('success', 'Senha Alterada com Sucesso!');
        return redirect()->route('admin.users.index');
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