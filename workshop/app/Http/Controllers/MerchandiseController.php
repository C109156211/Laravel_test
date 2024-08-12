<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class MerchandiseController extends Controller
{
    // 商品新增頁面
    public function MerchandiseCreate()
    {
        // 接收輸入資料
        $form_data = $request->all();

        // // 定義需要檢查的欄位
        // $required_fields = [
        //     'name' => '商品名稱',
        //     'price' => '商品價格',
        //     'amount' => '商品數量',
        //     'status' => '商品狀態',
        //     'type' => '商品類型',
        //     'illustrate' => '商品說明',
        // ];

        // $errors = [];

        // 使用迴圈檢查每個欄位是否填寫
        if( $form_data['name'] == "" || 
            $form_data['price']== "" || 
            $form_data['amount'] == "" ||
            $form_data['status']== "" || 
            $form_data['type'] == "" ||
            $form_data['illustrate']== "")
            {
                return redirect('/merchadise/create')
                ->withInput()
                ->withErrors($errors[] = $label . '為必填項');
        }
        else {
            $binding = [
                'title' => '新增商品',
            ];

            return view('merchandise.create', $binding);
            }

        }

    // 商品編輯處理
    public function MerchandiseEditProcess($merchandise_id, Request $request)
    {
        // 接收輸入資料
        $form_data = $request->all();

        // 定義需要檢查的欄位
        $required_fields = [
            'name' => '商品名稱',
            'price' => '商品價格',
            'amount' => '商品數量',
            'status' => '商品狀態',
            'type' => '商品類型',
            'illustrate' => '商品說明',
        ];

        $errors = [];

        // 使用迴圈檢查每個欄位是否填寫
        foreach ($required_fields as $field => $label) {
            if (empty($form_data[$field])) {
                $errors[] = $label . '為必填項';
            }
        }
    
        // 如果有錯誤，則返回錯誤訊息
        if (!empty($errors)) {
            return redirect()->back()
            ->withInput()
            ->withErrors($errors);
        }
    
        // 撈取商品資料
        $Merchandise = Merchandise::findOrFail($merchandise_id);
    
        // 處理圖片上傳
        if ($request->hasFile('photo')) {
            $form_data['photo'] = $this->handlePhotoUpload($request->file('photo'));
        }
    
        // 更新商品資料
        $Merchandise->update($form_data);
    
        // 重新導向到商品編輯頁
        return redirect('/merchandise/' . $Merchandise->id . '/edit');
    }

    // 處理圖片上傳的私有方法
    private function handlePhotoUpload($photo)
    {
        // 產生自訂隨機檔案名稱
        $file_name = uniqid() . '.' . $photo->getClientOriginalExtension();
        // 檔案相對路徑
        $file_relative_path = 'images/merchandise/';
        // 將圖片存儲至 public 目錄中並取得存儲的相對路徑
        $file_path = $photo->storeAs($file_relative_path, $file_name, 'public');

        // 返回圖片的 URL
        return Storage::url($file_path);
    }

    // 商品編輯頁面
    public function MerchandiseEdit($merchandise_id)
    {
        $Merchandise = Merchandise::where('id', $merchandise_id)->first();
        $binding = [
            'title' => '編輯商品',
            'Merchandise' => $Merchandise,
        ];
        return view('merchandise.edit', $binding);
    }

    // 商品管理清單檢視
    public function MerchandiseManage()
    {
        // 每頁資料量
        $row_per_page = 10;
        // 撈取商品分頁資料
        $MerchandisePaginate = Merchandise::OrderBy('created_at', 'desc')
            ->paginate($row_per_page);

        // 設定商品圖片網址
        foreach ($MerchandisePaginate as &$Merchandise) {
            if (!is_null($Merchandise->photo)) {
                // 設定商品照片網址
                $Merchandise->photo = url($Merchandise->photo);
            }
        }

        $binding = [
            'title' => '商品管理',
            'MerchandisePaginate'=> $MerchandisePaginate,
        ];

        return view('merchandise.manage', $binding);
    }

    // 商品刪除
    public function MerchandiseDelete($merchandise_id)
    {
        $Merchandise = Merchandise::where('id', $merchandise_id)->delete();

        return redirect(route('merchandise.manage'));
    }
}
