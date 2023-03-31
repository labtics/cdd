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

            //Domiciliarios
                'dependencia'  => 'required',
                'direccion_dependencia'  => 'required',
                'horarios' =>'required',
                'scales'  => 'required',
                'nombre_jefes' =>'required',
                'scales'  => 'required',
                'telefono_dependencia' =>'required',
            //Dependencias
                'dependencia'=>'required',
                'direccion_dependencia'=>'required',
                'horarios'=>'required',
                'diasdelasemana'=>'required',
                'nombre_jefe'=>'required',
                'telefono_dependencia'=>'numeric|required',
            //Academicos
                'grado_academico'=>'required',
                'titulo'=>'required',
                'cedula'=>'required',
                'estatus'=>'required',
                'titulopdf'=>'required',
                'cedulapdf'=>'required',
            //Producción 
                'eventosasistidos'=>'required',
                'fecha_evento'=>'required|date',
                'fecha_evento'=>'required|date',
                'institucion'=>'required',
                'nombreeventoimpartido'=>'required',
            //Medicos
                'nss'=>'required|numeric',
                'alergias'=>'required',
                'patologias'=>'required',
                'tipo_sangre'=>'required|min:1',
                'nombre_contacto_emergencia'=>'required',
                'nombre_contacto_emergencia'=>'required'
                
                
                    


            

            



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
            
            //Domiciliarios
                'dependencia'  => 'Seleccione su dependencia',
                'direccion_dependencia'  => 'Escriba la dirección de la dependencia',
                'horarios' =>'Escriba el horario de la dependencia',
                'scales'  => 'Seleccione los días que labore',
                'nombre_jefes' =>'Escriba el nombre de su jefe',
                'telefono_dependencia' =>'Escriba el telefono  de la dependencia',


            //Dependencias
                'dependencia'=>'Escribe el nombre de  la dependencia',
                'direccion_dependencia'=>'Escribe la dirección de  la dependencia',
                'horarios'=>'Escribe los horarios de su dependencia',
                'diasdelasemana'=>'Seleccione los días que labora en la dependencia',
                'nombre_jefe'=>'Escribe el nombre del jefe de la dependencia',
                'telefono_dependencia'=>'Escribe le nombre de  la dependencia',

            //Academicos

           ];


        }

     
}


