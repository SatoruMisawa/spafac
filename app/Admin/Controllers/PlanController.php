<?php

namespace App\Admin\Controllers;

use App\Plan;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class PlanController extends Controller
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
        $grid = new Grid(new Plan);

        $grid->id('Id');
        $grid->space_id('Space id');
        $grid->preorder_deadline_id('Preorder deadline id');
        $grid->preorder_period_id('Preorder period id');
        $grid->name('Name');
        $grid->price_per_hour('Price per hour');
        $grid->price_per_day('Price per day');
        $grid->need_to_be_approved('Need to be approved');
        $grid->from('From');
        $grid->to('To');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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
        $show = new Show(Plan::findOrFail($id));

        $show->id('Id');
        $show->space_id('Space id');
        $show->preorder_deadline_id('Preorder deadline id');
        $show->preorder_period_id('Preorder period id');
        $show->name('Name');
        $show->price_per_hour('Price per hour');
        $show->price_per_day('Price per day');
        $show->need_to_be_approved('Need to be approved');
        $show->from('From');
        $show->to('To');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Plan);

        $form->number('space_id', 'Space id');
        $form->number('preorder_deadline_id', 'Preorder deadline id');
        $form->number('preorder_period_id', 'Preorder period id');
        $form->text('name', 'Name');
        $form->number('price_per_hour', 'Price per hour');
        $form->number('price_per_day', 'Price per day');
        $form->switch('need_to_be_approved', 'Need to be approved');
        $form->date('from', 'From')->default(date('Y-m-d'));
        $form->date('to', 'To')->default(date('Y-m-d'));

        return $form;
    }
}
