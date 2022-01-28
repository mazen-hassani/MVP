<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;

class Compress implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    private $org_image_info;

    public function __construct(Image $img)
    {
        $this->org_image_info = $img;
    }

    public function handle()
    {
        $image = $this->org_image_info;

        $compressed_image = ImageManagerStatic::make(Storage::disk('public')->get($image->org_path));
        $crop_width = ($compressed_image->width() > $compressed_image->height()) ? $compressed_image->height() : $compressed_image->width();
        $compressed_image->crop($crop_width, $crop_width)->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 100);

        $compressed_image = (new \Intervention\Image\ImageManager())->make($compressed_image)->colorize(-100, 0, 100);

        $path = '/compressed/'.Str::uuid().'.jpg';
        Storage::disk('public')->put($path, $compressed_image);
        $image->thumbnail_path = $path;
        $image->save();
    }
}
