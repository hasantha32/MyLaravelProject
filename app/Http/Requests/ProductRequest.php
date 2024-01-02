<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
//            'name' => ['numeric', 'min:10', 'max:20']
//            'name' => ['unique:products,name']

                        'name' => ['required'],
                        'price' => ['required', 'numeric', 'between:0,100'],
                        'quantity' =>['required','numeric', 'between:0,100']

//                    return response()->json('Added Successfully');

        ];
        //                    return response()->json('Added Successfully');

    }
    public function messages()
    {
        return [
           'name' => ('Added UnSuccessfully'),
        ];
    }



//    public function rules()
//    {
//        return [
//            'name' => 'required',
//            'value' => 'required',
//            'price' => 'required',
//            'quantity' => 'required',
//            'type' => 'required',
//        ];
//    }


}
