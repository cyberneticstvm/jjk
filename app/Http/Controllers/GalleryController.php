<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function __invoke(): View
    {
        $galleryPath = public_path('images/gallery');
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

        $images = collect(File::exists($galleryPath) ? File::files($galleryPath) : [])
            ->filter(fn ($file) => in_array(strtolower($file->getExtension()), $allowedExtensions, true))
            ->sortBy(fn ($file) => $file->getFilename())
            ->map(fn ($file) => [
                'src' => asset('images/gallery/'.$file->getFilename()),
                'alt' => str($file->getFilenameWithoutExtension())->replace(['-', '_'], ' ')->title()->toString(),
            ])
            ->values();

        return view('gallery', compact('images'));
    }
}
