<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMedia;
use App\Models\ProductMediaImage;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\User;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    use ImageUploadTrait;

    public function dashboard() {
        return view('frontend.profile.dashboard.dashboard');
    }

    public function myModel() {
        return view('frontend.profile.my-models.my-model');
    }

    public function upload() {
        $categories = Category::get();
        $subCategories = SubCategory::get();

        return view('frontend.profile.publishing.upload', compact('categories', 'subCategories'));
    }

    public function handleUpload(ProductStoreRequest $req)
    {
        DB::beginTransaction();

        try {
            // Tạo sản phẩm
            $product = Product::create([
                'title' => $req->title,
                'user_id' => auth()->user()->id,
                'type_model' => $req->type_model,
                'description' => $req->description,
                'price' => $req->price,
                'category_id' => $req->category_id,
                'license' => $req->license,
                'status' => $req->status,
            ]);

            // Upload và lưu media
            $productMediaUrl = $this->uploadImage($req->file('media_url'), 'products');
            $productThumbnail = $this->uploadImage($req->file('thumbnail'), 'products');
            $productMediaImage = $this->uploadImage($req->file('image_url'), 'products');

            $productMedia = ProductMedia::create([
                'product_id' => $product->id,
                'media_url' => $productMediaUrl,
                'thumbnail' => $productThumbnail
            ]);

            ProductMediaImage::create([
                'product_media_id' => $productMedia->id,
                'image_url' => $productMediaImage
            ]);

            // Thêm tags
            $tags = collect($req->tags)->map(function ($tag) use ($product) {
                return [
                    'product_id' => $product->id,
                    'name' => $tag,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            })->toArray();

            Tag::insert($tags);

            DB::commit();

            return redirect()->back()->with([
                'msg' => 'Thêm sản phẩm thành công!',
                'alert-type' => 'success'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi thêm sản phẩm: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Đã xảy ra lỗi khi thêm sản phẩm.'])->with([
                'msg' => 'Thêm sản phẩm không thành công!',
                'alert-type' => 'danger'
            ]);
        }
    }

    public function purchase() {
        return view('frontend.profile.purchases.purchase');
    }

    public function productReport() {
        return view('frontend.profile.reports.product-report');
    }

    public function saleReport() {
        return view('frontend.profile.reports.sale-report');
    }

    public function setting() {
        return view('frontend.profile.settings.setting');
    }

    public function updateProfile(ProfileUpdateRequest $req) {
        $user = User::find(auth()->user()->id);

        // Sử dụng Trait để xử lý ảnh
        $avatar = $this->uploadImage($req->file('avatar'), 'avatars', $user->metadata->avatar ?? null);

        // Cập nhật thông tin người dùng
        $user->update(['name' => $req->name]);
        
        // Cập nhật hoặc tạo mới metadata
        $user->metadata()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'birthday' => $req->birthday,   
                'about' => $req->about,   
                'company' => $req->company,   
                'address1' => $req->address1,   
                'address2' => $req->address2,   
                'city' => $req->city,   
                'country' => $req->country,   
                'province' => $req->province,   
                'postal_code' => $req->postcode,   
                'telephone' => $req->telephone,
                'avatar' => $avatar
            ]
        );
        
        return redirect()->back()->with([
            'msg' => 'Cập nhật thông tin thành công',
            'alert-type' => 'success'
        ]);
        
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).+$/'
            ],
        ], [
            'current_password.required' => 'Vui lòng nhập mật khẩu hiện tại.',
            'new_password.required' => 'Vui lòng nhập mật khẩu mới.',
            'new_password.min' => 'Mật khẩu mới phải có ít nhất 8 ký tự.',
            'new_password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'new_password.regex' => 'Mật khẩu mới phải chứa ít nhất 1 chữ hoa, 1 chữ thường và 1 ký tự đặc biệt.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with([
                'msg' => 'Thay đổi mật khẩu không thành công!',
                'alert-type' => 'danger'
            ]);
        }

        $user = User::find(auth()->user()->id);

        // Kiểm tra mật khẩu hiện tại
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with([
                'msg' => 'Mật khẩu hiện tại không chính xác!',
                'alert-type' => 'danger'
            ]);
        }

        // Cập nhật mật khẩu mới
        $user->update(['password' => Hash::make($request->new_password)]);

        return redirect()->back()->with([
            'msg' => 'Mật khẩu đã được thay đổi thành công!',
            'alert-type' => 'success'
        ]);
    }
}
