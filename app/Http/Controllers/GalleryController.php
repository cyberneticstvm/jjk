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
                'alt' => $this->captionFromFilename($file->getFilenameWithoutExtension()),
            ])
            ->values();

        return view('gallery', compact('images'));
    }

    private function captionFromFilename(string $filename): string
    {
        return collect(preg_split('/[-_\s]+/', $filename, flags: PREG_SPLIT_NO_EMPTY))
            ->map(function (string $word): string {
                return strtoupper($word) === $word
                    ? $word
                    : ucfirst($word);
            })
            ->implode(' ');
    }
}
