<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'nombre' => 'required',

        ];
    }
}
//$request->validate([
   // 'id_categoria' => 'required|exists:categoria,id_categoria',
    //'codigo' => 'required|string|max:50',
    //'nombre' => 'required|string|max:100',
    //'descripcion' => 'nullable|string|max:512',
    ///'existencia' => 'required|integer',
    //'imagen' => 'nullable|string|max:50',
//]);
