<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class Blog_translationRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required',
            'titulo_en' => 'required',
            'previo' => 'required',
            'previo_en' => 'required',
            'descripcion' => 'required',
            'descripcion_en' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'titulo' => 'Título',
            'titulo_en' => 'Título inglés',
            'previo' => 'Previo',
            'previo_en' => 'Previo inglés',
            'descripcion' => 'Contenido',
            'descripcion_en' => 'Contenido inglés',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
