<?php

namespace App\Http\Traits;

use App\Models\Image;
use Illuminate\Http\Request;

trait ImageTrait
{
    public function verifyAndStoreImage(Request $request, $input_name, $folder_name, $disk, $imageable_id, $imageable_type)
    {
        if ($request->hasFile($input_name)) {
            if (!$request->file($input_name)->isValid()) {
                flash()->addError('Invalid Image !')->important();
                return redirect()->back()->withInput();
            }
            $photo = $request->file($input_name);
            $name = \Str::slug($request->input('schoolname'));
            $filename = $name . '.' . $photo->getClientOriginalExtension();
            $Image = new Image();
            $Image->filename = $filename;
            $Image->imageable_id = $imageable_id;
            $Image->imageable_type = $imageable_type;
            $Image->save();
            return $request->file($input_name)->storeAs($folder_name, $filename, $disk);
        }
        return null;
    }
}
