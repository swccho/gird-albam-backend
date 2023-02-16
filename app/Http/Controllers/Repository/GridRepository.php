<?php

namespace App\Http\Controllers\Repository;

use App\Models\GridModel;
use Illuminate\Support\Facades\Validator;

class GridRepository
{
    public static function Create($request)
    {
        try {
            $input = $request->input();
            $validator = Validator::make($input, [
                'title' => 'required',
                'media_ids' => 'required|array',
            ]);

            if ($validator->fails()) {
                return ['status' => 500, 'error' => $validator->errors()];
            }

            $gridModel = new GridModel();
            $gridModel->title = $input['title'];
            $gridModel->grid_type = $input['grid_type'];
            $gridModel->media_ids = $input['media_ids'];
            $gridModel->save();

            return ['status' => 200, 'msg' => 'Gird has been saved successfully.'];
        } catch (\Exception $e) {
            return ['status' => 500, 'error' => $e->getMessage()];
        }
    }

}
