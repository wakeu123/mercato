<?php

namespace App\Admin\Controllers;

use App\Produits;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProduitController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Produits';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Produits());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('slug', __('Slug'));
        $grid->column('details', __('Details'));
        $grid->column('price', __('Price'));
        $grid->column('description', __('Description'));
        $grid->column('featured', __('Featured'));
        $grid->column('image', __('Image'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->categories()->display(function ($cats) {

            $cats = array_map(function ($cat) {
                return "<span class='label label-success'>{$cat['name']}</span>";
            }, $cats);

            return join('&nbsp;', $cats);
        });

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
        $show = new Show(Produits::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));
        $show->field('details', __('Details'));
        $show->field('price', __('Price'));
        $show->field('description', __('Description'));
        $show->field('featured', __('Featured'));
        $show->field('image', __('Image'));
        $show->field('quantity', __('Quantity'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Produits());

        $form->text('name', __('Name'));
        $form->text('slug', __('Slug'));
        $form->text('details', __('Details'));
        $form->number('price', __('Price'));
        $form->textarea('description', __('Description'));
        $form->switch('featured', __('Featured'));
        $form->image('image', __('Image'));
        $form->number('quantity', __('Quantity'))->default(10);
        $form->multipleSelect('category','categories');

        return $form;
    }
}
