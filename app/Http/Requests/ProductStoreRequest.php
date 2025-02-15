<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'title'       => 'required|string|max:255',
            'type_model'  => 'required|string|max:100',
            'description' => 'required|string',
            'tags'        => 'required|array|min:1',
            'tags.*'      => 'string|max:20',
            'price'       => 'required|numeric|min:2',
            'license'     => 'required|string|in:free,fee',
            'status'      => 'required|string|in:Draft,Publish',
            'thumbnail'   => 'required|file|mimes:jpg,jpeg,png|max:10240',
            'media_url'   => 'nullable|file|mimes:zip,rar,7z|max:51200',
            'image_url'   => 'nullable|file|mimes:jpg,jpeg,png|max:10240',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'       => 'Tiêu đề không được để trống.',
            'type_model.required'  => 'Loại mô hình không được để trống.',
            'description.required' => 'Mô tả không được để trống.',
            'tags.required'        => 'Phải chọn ít nhất một tag.',
            'price.required'       => 'Giá không được để trống.',
            'price.min'            => 'Giá tối thiểu là 2',
            'license.required'     => 'Giấy phép không được để trống.',
            'status.required'      => 'Trạng thái không hợp lệ.',
            'thumbnail.required'   => 'Ảnh thumbnail không được để trống',
            'thumbnail.mimes'      => 'Ảnh thumbnail chỉ chấp nhận các định dạng jpg, jpeg, png.',
            'media_url.mimes'      => 'File media chỉ chấp nhận các định dạng zip,rar,7z.',
            'image_url.mimes'      => 'Ảnh chỉ chấp nhận các định dạng jpg, jpeg, png.',
            'thumbnail.max'        => 'Ảnh thumbnail không được lớn hơn 10MB.',
            'media_url.max'        => 'File media không được lớn hơn 50MB.',
            'image_url.max'        => 'Ảnh không được lớn hơn 10MB.',
        ];
    }
}
