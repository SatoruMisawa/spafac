<?php

namespace App\Admin\Controllers;

use App\Address;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AddressController extends Controller
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
        $grid = new Grid(new Address);

        $grid->id('Id');
        $grid->prefecture_id('Prefecture id');
        $grid->zip('Zip');
        $grid->address1('Address1');
        $grid->address1_ruby('Address1 ruby');
        $grid->address2('Address2');
        $grid->address2_ruby('Address2 ruby');
        $grid->address3('Address3');
        $grid->address3_ruby('Address3 ruby');
        $grid->latitude('Latitude');
        $grid->longitude('Longitude');

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
        $show = new Show(Address::findOrFail($id));

        $show->id('Id');
        $show->prefecture_id('Prefecture id');
        $show->zip('Zip');
        $show->address1('Address1');
        $show->address1_ruby('Address1 ruby');
        $show->address2('Address2');
        $show->address2_ruby('Address2 ruby');
        $show->address3('Address3');
        $show->address3_ruby('Address3 ruby');
        $show->latitude('Latitude');
        $show->longitude('Longitude');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Address);

        $form->number('prefecture_id', 'Prefecture id');
        $form->text('zip', 'Zip');
        $form->text('address1', 'Address1');
        $form->text('address1_ruby', 'Address1 ruby');
        $form->text('address2', 'Address2');
        $form->text('address2_ruby', 'Address2 ruby');
        $form->text('address3', 'Address3');
        $form->text('address3_ruby', 'Address3 ruby');
        $form->decimal('latitude', 'Latitude');
        $form->decimal('longitude', 'Longitude');

        return $form;
    }
}
