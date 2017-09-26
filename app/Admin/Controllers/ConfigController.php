<?php

namespace App\Admin\Controllers;

use App\Models\Config;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ConfigController extends Controller
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

            $content->header('官网配置');
            $content->description('官网的配置信息');

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

            $content->header('官网配置');
            $content->description('官网的配置信息');

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

            $content->header('官网配置');
            $content->description('官网的配置信息');

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
        return Admin::grid(Config::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->name('名称');

            $grid->value('值');

            $grid->description('描述')->display(function($text) {
                return str_limit($text, 100, '...');
            });

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Config::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('name', '名称');

            $form->html('<a href="/'.request()->path().'?sulg=image">图片</a><a href="/'.request()->path().'?sulg=textarea"">文字</a>', $label = '');

            $url = request('_previous_') ? : request()->fullUrl();
            if (isset(parse_url($url)['query'])) {
                $query = parse_url($url, PHP_URL_QUERY);
                parse_str($query, $data);
                if (isset($data['sulg'])) {
                    $sulg = $data['sulg'];
                    $form->$sulg('value', '值');
                } else {
                    $form->textarea('value', '值');
                }
            } else {
                $request = request()->all();
                if ($request['value'] instanceof UploadedFile) {
                    $form->image('value', '值');
                } else {
                    $form->textarea('value', '值');
                }
            }

            $form->editor('description', '描述');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
