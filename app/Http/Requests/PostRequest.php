<?php

namespace App\Http\Requests;

use App\Events\ErrorsEvent;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:2',
            'content' => 'required|min:5'
        ];
    }

    public function withValidator($validator)
{
   if( $validator->fails()){        
            $Errors =[];
            $title_error = $validator->errors()->messages()['title'];
            $content_error = $validator->errors()->messages()['content'];
            array_push($Errors,$title_error,$content_error );
            event(new ErrorsEvent($Errors));
        }
            
}
}
