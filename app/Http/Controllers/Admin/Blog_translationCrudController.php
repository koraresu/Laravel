<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Blog_translationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation

use App\Models\Blog;
use App\Models\Blog_translation;

use Backpack\CRUD\app\Http\Requests\CrudRequest as StoreRequest;
use Backpack\CRUD\app\Http\Requests\CrudRequest as UpdateRequest;

class Blog_translationCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Blog_translation');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/blog_translation');
        $this->crud->setEntityNameStrings('Blogs', 'Blog');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        //$this->crud->setFromDb();

        // ------ CRUD FIELDS

        $this->crud->setColumns([
            ['name' => 'titulo', 'label' => 'Título'],
            ['name' => 'created_at', 'label' => 'Fecha de creación', 'type' => 'date'],
        ]);

        $this->crud->addField([
            'name' => 'titulo',
            'label' => 'Título',
            'tab' => 'Español'
        ]);
        $this->crud->addField([
            'name' => 'previo',
            'label' => 'Previo',
            'type' => 'tinymce',
            'tab' => 'Español'
        ]);
        $this->crud->addField([
            'name' => 'descripcion',
            'label' => 'Contenido',
            'type' => 'tinymce',
            'tab' => 'Español'
        ]);
        

        $this->crud->addField([ // image
            'label' => "Imagen",
            'name' => 'image_banner',
            'type' => 'image',
            'upload' => true,
            'crop' => false, // set to true to allow cropping, false to disable
            'prefix' => '',
            'tab' => 'Español'
        ]);

        $this->crud->addField([ // image
            'label' => "Thumbnail",
            'name' => 'small_image_banner',
            'type' => 'image',
            'upload' => true,
            'crop' => false, // set to true to allow cropping, false to disable
            'prefix' => '',
            'tab' => 'Español'
        ]);

        $this->crud->addField([
            'name' => 'titulo_en',
            'label' => 'Título',
            'tab' => 'Inglés',
        ]);

        $this->crud->addField([
            'name' => 'previo_en',
            'label' => 'Previo',
            'type' => 'tinymce',
            'tab' => 'Inglés',
        ]);
        $this->crud->addField([
            'name' => 'descripcion_en',
            'label' => 'Contenido',
            'type' => 'tinymce',
            'tab' => 'Inglés',
        ]);

        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        $this->crud->allowAccess(['list', 'create', 'reorder', 'delete']);
        //$this->crud->denyAccess(['update']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        $this->crud->addClause('where', 'locale', '!=', 'en');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        $this->crud->orderBy('created_at', 'desc');
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function create()
    {

        // prepare the fields you need to show
        $this->data['crud'] = $this->crud;
        $this->data['saveAction'] = $this->getSaveAction();
        $this->data['fields'] = $this->crud->getCreateFields();
        $this->data['title'] = trans('backpack::crud.add').' '.$this->crud->entity_name;

        // load the view from /resources/views/vendor/backpack/crud/ if it exists, otherwise load the one in the package
        return view($this->crud->getCreateView(), $this->data);
    }

    public function store(Blog_translationRequest $request)
    {
        $blog = new Blog;

        $blog->visitas = 0;
        $blog->save();
        $request["blog_id"] = $blog->id;
        $request['locale'] = 'es';
        $redirect_location = $this->storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $slug = $this->crud->entry->hyphenize($this->crud->entry->titulo);
        $this->crud->entry->slug = $slug;

        //create main blog
        ////////
        $this->crud->entry->blog_id = $blog->id;
        $this->crud->entry->save();

        $blog_en = new Blog_translation;

        $blog_en->ignoreSetAttr = true;

        $blog_en->titulo = $request->titulo_en;
        $blog_en->descripcion = $request->descripcion_en;
        $blog_en->previo = $request->previo_en;
        $blog_en->slug = $this->crud->entry->hyphenize($request->titulo_en);

        $blog_en->image_banner = $this->crud->entry->image_banner;
        //$blog_en->small_image_banner = $this->crud->entry->small_image_banner;

        $blog_en->locale = 'en';
        $blog_en->blog_id = $this->crud->entry->return_str($blog->id);
        $blog_en->save();

        return $redirect_location;
    }

    public function storeCrud(StoreRequest $request = null)
    {
        $this->crud->hasAccessOrFail('create');

        // fallback to global request instance
        if (is_null($request)) {
            $request = \Request::instance();
        }

        // replace empty values with NULL, so that it will work with MySQL strict mode on
        foreach ($request->input() as $key => $value) {
            if (empty($value) && $value !== '0') {
                $request->request->set($key, null);
            }
        }

        // insert item in the db
        $item = $this->crud->create($request->except(['save_action', '_token', '_method', 'titulo_en', 'previo_en', 'descripcion_en', 'image_banner_en', 'small_image_banner_en']));
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.insert_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        return $this->performSaveAction($item->getKey());
    }

    public function update(Blog_translationRequest $request)
    {
        $blog_es = Blog_translation::where('id', $request->id)->first();
        $blog_en = Blog_translation::where('blog_id', $blog_es->blog_id)->where('locale', 'en')->first();


        // your additional operations before save here
        $redirect_location = $this->updateCrud($request);

        $blog_en->ignoreSetAttr = true;

        $blog_en->titulo = $request->titulo_en;
        $blog_en->descripcion = $request->descripcion_en;
        $blog_en->previo = $request->previo_en;
        $blog_en->slug = $this->crud->entry->hyphenize($request->titulo_en);

        $blog_en->image_banner = $this->crud->entry->image_banner;
        //$blog_en->small_image_banner = $this->crud->entry->small_image_banner;

        $blog_en->save();

        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry


        $slug = $this->crud->entry->hyphenize($this->crud->entry->titulo);
        $this->crud->entry->slug = $slug;
        $this->crud->entry->save();

        return $redirect_location;
    }

    public function updateCrud(UpdateRequest $request = null)
    {
        $this->crud->hasAccessOrFail('update');

        // fallback to global request instance
        if (is_null($request)) {
            $request = \Request::instance();
        }

        // replace empty values with NULL, so that it will work with MySQL strict mode on
        foreach ($request->input() as $key => $value) {
            if (empty($value) && $value !== '0') {
                $request->request->set($key, null);
            }
        }

        // update the row in the db
        $item = $this->crud->update($request->get($this->crud->model->getKeyName()),
            $request->except('save_action', '_token', '_method', 'titulo_en', 'previo_en', 'descripcion_en', 'image_banner_en', 'small_image_banner_en'));
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        return $this->performSaveAction($item->getKey());
    }

    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');

        $model = new Blog_translation;

        $parent_blog_id = $model->where('id', $id)->first()->blog_id;

        $model->where('blog_id', $parent_blog_id)->delete();

        return (string) Blog::find($parent_blog_id)->delete();
    }
}
