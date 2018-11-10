<?php

namespace App\Admin\Controllers;

use App\Space;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SpaceController extends Controller
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
        $grid = new Grid(new Space);

        $grid->id('Id');
        $grid->user_id('User id');
        $grid->facility_id('Facility id');
        $grid->key_delivery_id('Key delivery id');
        $grid->capacity('Capacity');
        $grid->floor_area('Floor area');
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
        $show = new Show(Space::findOrFail($id));

        $show->id('Id');
        $show->user_id('User id');
        $show->facility_id('Facility id');
        $show->key_delivery_id('Key delivery id');
        $show->capacity('Capacity');
        $show->floor_area('Floor area');
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
        $form = new Form(new Space);

        $form->number('user_id', 'User id');
        $form->number('facility_id', 'Facility id');
        $form->number('key_delivery_id', 'Key delivery id');
        $form->number('capacity', 'Capacity');
        $form->number('floor_area', 'Floor area');

        return $form;
    }
}
