<?php

namespace App\Http\Traits;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageTrait
{
    /**
     * Verify and store or update an image.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $inputName
     * @param string $folderName
     * @param string $disk
     * @param int $imageableId
     * @param string $imageableType
     * @param string $fName
     * @param \App\Models\Image|null $existingImage
     * @return string|null
     */
    public function verifyAndStoreImage(Request $request, $inputName, $folderName, $disk, $imageableId, $imageableType, $fName, Image $existingImage = null)
    {
        if ($request->hasFile($inputName)) {
            if (! $request->file($inputName)->isValid()) {
                flash()->addError('Invalid Image!')->important();
                return redirect()->back()->withInput();
            }

            $photo = $request->file($inputName);
            $name = Str::slug($fName);
            $filename = $name . '.' . $photo->getClientOriginalExtension();

            // If there's an existing image, delete it
            if ($existingImage) {
                Storage::disk($disk)->delete($folderName . '/' . $existingImage->filename);
                $existingImage->filename = $filename;
                $existingImage->save();
            } else {
                $newImage = new Image();
                $newImage->filename = $filename;
                $newImage->imageable_id = $imageableId;
                $newImage->imageable_type = $imageableType;
                $newImage->save();
            }

            return $request->file($inputName)->storeAs($name, $filename, $disk);
        }

        return null;
    }
}
