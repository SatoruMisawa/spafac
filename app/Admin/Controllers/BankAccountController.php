<?php

namespace App\Admin\Controllers;

use App\BankAccount;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class BankAccountController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BankAccount);

        $grid->id('Id');
        $grid->user_id('User id');
        $grid->bank_name('Bank name');
        $grid->bank_code('Bank code');
        $grid->branch_name('Branch name');
        $grid->branch_code('Branch code');
        $grid->account_number('Account number');
        $grid->account_holder('Account holder');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(BankAccount::findOrFail($id));

        $show->id('Id');
        $show->user_id('User id');
        $show->bank_name('Bank name');
        $show->bank_code('Bank code');
        $show->branch_name('Branch name');
        $show->branch_code('Branch code');
        $show->account_number('Account number');
        $show->account_holder('Account holder');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BankAccount);

        $form->number('user_id', 'User id');
        $form->text('bank_name', 'Bank name');
        $form->text('bank_code', 'Bank code');
        $form->text('branch_name', 'Branch name');
        $form->text('branch_code', 'Branch code');
        $form->text('account_number', 'Account number');
        $form->text('account_holder', 'Account holder');

        return $form;
    }
}
