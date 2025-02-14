<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'birthday' => 'nullable|date',
            'avatar' => 'nullable|image|max:2048',
            'about' => 'nullable|string|max:1000',
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'address1' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'postcode' => 'nullable|regex:/^\d{5,6}$/',
            'telephone' => 'nullable|regex:/^(\+?\d{1,4})?\s?\d{6,15}$/',
        ];
    }

    public function messages(): array
    {
        return [
            'birthday.date' => 'Ngày sinh không hợp lệ.',
            'avatar.image' => 'Ảnh đại diện phải là định dạng ảnh hợp lệ.',
            'avatar.max' => 'Ảnh đại diện không được vượt quá 2MB.',
            'about.max' => 'Thông tin giới thiệu không được quá 1000 ký tự.',
            'name.required' => 'Tên là bắt buộc.',
            'name.max' => 'Tên không được vượt quá 255 ký tự.',
            'company.max' => 'Tên công ty không được vượt quá 255 ký tự.',
            'address1.max' => 'Địa chỉ 1 không được vượt quá 255 ký tự.',
            'address2.max' => 'Địa chỉ 2 không được vượt quá 255 ký tự.',
            'city.max' => 'Tên thành phố không được vượt quá 100 ký tự.',
            'country.max' => 'Tên quốc gia không được vượt quá 100 ký tự.',
            'postcode.regex' => 'Mã bưu chính không hợp lệ.',
            'telephone.regex' => 'Số điện thoại không hợp lệ.',
        ];
    }
}
