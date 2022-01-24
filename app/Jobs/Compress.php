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
        $compressed_image = ImageManagerStatic::make(Storage::disk('public')->get($image->org_path))->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 100);

        $path = '/compressed/'.Str::uuid().'.jpg';
        Storage::disk('public')->put($path, $compressed_image);
        $image->thumbnail_path = $path;
        $image->save();
    }
}
