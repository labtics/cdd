<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestDocente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //Generales
                'empleado'  => 'min:5|required',
                'nombre'  => 'min:1|max:70|required',
                'apellido_paterno' => 'min:5|max:70|required',
                'apellido_materno' => 'min:5|max:70|required',
                'sexo' => 'required',
                'fecha_nacimiento' => 'min:8|required|date',
                'edad' => 'required|numeric',
                'telefono1' => 'min:10|required|numeric',
                'telefono2' => 'min:10|required|numeric',
                'estado_civil' => 'required',
                'categoria' => 'required|min:1',
                'categoria_tipo'=> 'required|min:1',
                'rfc'=> 'required|min:13',
                'curp'=>'required',

                
                
                    


            

            



        ];
    }

    public function messages()
        {   
            return [
           //Generales
                'empleado.required'=>'Escribe tu número de empleado',
                'empleado.numeric'=>'Número de empledo solo contiene números',
                'nombre.required'=>'Tu nombre es obligatorio',
                'apellido_paterno'=>'Tu apellido paterno es obligatorio',
                'apellido_materno'=>'Tu apellido materno es obligatorio',
                'sexo.required'=>'Elige tu sexo',
                'fecha_nacimiento.required'=>'Ingresa tu fecha de nacimiento',
                'edad.required'=>'Tu edad es obligatoria',
                'edad.numeric'=>'Tu edad debe ser un número',
                'telefono1.numeric'=>'Tu número de celular debe ser de 10 dígitos',
                'telefono1.required'=>'Tu número de celular es obligatorio',
                'telefono2.numeric'=>'Tu número de celular debe ser de 10 dígitos',
                'telefono2.required'=>'Tu número de celular es obligatorio',
                'estado_civil.required' => 'Selecciona tu estado civil ', 
                'categoria.required' => 'Selecciona tu categoria', 
                'categoria_tipo.required' => 'Selecciona tu tipo de categoria', 
                'rfc.required'=>'Su rfc es obligatorio',
                'curp.required'=>'Su curp es obligatorio',
                'modalidad_id.required' => 'Elige tu modalidad de titulaciòn',
            
           ];


        }

     
}


