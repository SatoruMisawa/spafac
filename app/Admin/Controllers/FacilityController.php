<?php

namespace App\Admin\Controllers;

use App\Facility;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class FacilityController extends Controller
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
        $grid = new Grid(new Facility);

        $grid->id('Id');
        $grid->user_id('User id');
        $grid->address_id('Address id');
        $grid->facility_kind_id('Facility kind id');
        $grid->name('Name');
        $grid->access('Access');
        $grid->tel('Tel');

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
        $show = new Show(Facility::findOrFail($id));

        $show->id('Id');
        $show->user_id('User id');
        $show->address_id('Address id');
        $show->facility_kind_id('Facility kind id');
        $show->name('Name');
        $show->access('Access');
        $show->tel('Tel');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Facility);

        $form->number('user_id', 'User id');
        $form->number('address_id', 'Address id');
        $form->number('facility_kind_id', 'Facility kind id');
        $form->text('name', 'Name');
        $form->textarea('access', 'Access');
        $form->text('tel', 'Tel');

        return $form;
    }
}
