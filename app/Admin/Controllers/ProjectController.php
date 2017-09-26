<?php

namespace App\Admin\Controllers;

use App\Models\Project;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ProjectController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('众筹项目');
            $content->description('展示众筹项目');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('众筹项目');
            $content->description('展示众筹项目');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('众筹项目');
            $content->description('展示众筹项目');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Project::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->image('图片')->display(function ($image) {
                return '<img src="' . $image . '" alt="" width="50" height="50" />';
            });

            $grid->title('标题');

            $grid->desc('描述')->display(function($text) {
                return str_limit($text, 100, '...');
            });

            $grid->money('价格');

            $grid->status('状态')->display(function ($name) {
                return $name ? '已结束' : '众筹中';
            });

            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Project::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title', '标题');

            $form->image('image', '图片');

            $form->textarea('title', '描述');

            $form->currency('money', '价格')->symbol('￥');

            $form->switch('status', '状态')->states([
                'on'  => ['value' => 1, 'text' => '已结束', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '众筹中', 'color' => 'danger'],
            ]);

            $form->editor('content', '内容');

            $form->editor('ico', 'ICO细则');

            $form->editor('team', '团队介绍');

            $form->editor('issue', '问题细则');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
