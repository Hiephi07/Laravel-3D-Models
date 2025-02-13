<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait ImageUploadTrait
{
    /**
     * Lưu ảnh vào storage và trả về tên file.
     *
     * @param UploadedFile|null $image
     * @param string $folder
     * @param string|null $oldImage
     * @return string|null
     */
    public function uploadImage(?UploadedFile $image, string $folder, ?string $oldImage = null): ?string
    {
        if ($image) {
            // Xóa ảnh cũ nếu có
            if ($oldImage) {
                Storage::delete("public/{$folder}/{$oldImage}");
            }

            // Tạo tên file mới với timestamp
            $filename = time() . '.' . $image->getClientOriginalExtension();
            
            // Lưu ảnh vào thư mục storage
            $image->storeAs("public/{$folder}", $filename);

            return $filename;
        }

        return $oldImage; // Giữ lại ảnh cũ nếu không upload mới
    }
}
