<?php

namespace App\Http\Requests\Post;


use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->merge([
            // 'slug'=> Str::slug($this->title)
            // 'slug'=> Str::of($this->title)->slug()->append('-adicional')
            'slug'=> str($this->title)->slug()
        ]);
    }


    static public function myrules(){
        return [
            "title"=>"required|min:5|max:50",
            "slug"=>"unique:posts",
            "content"=>"required|min:7",
            "category_id"=>"required|integer",
            "description"=>"required|min:7",
            "posted"=>"required",
        ];
    }


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
        return $this->myrules();
    }
}