<?php

namespace App\Listeners;

use App\Enums\WorkType;
use App\Events\WorkAttachmentsChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Orchid\Attachment\Models\Attachment;

class ResizeAttachment
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(WorkAttachmentsChanged $event): void
    {
        $this->resizeImage($event->attachmentsIds, $event->workType);
    }

    private function resizeImage(array $attachmentsIds, string $workType): void
    {
        $dimensions = WorkType::tryFrom($workType)->imageDimensions();

        foreach ($attachmentsIds as $id)
        {
            $attachment = Attachment::
            select(['id', 'name', 'extension', 'path', 'disk'])
                ->findOrFail($id);

            $attachmentFullPath = Storage::disk($attachment->disk)
                ->path($attachment->path . '/' . $attachment->name . '.' . $attachment->extension);

            $image_resize = Image::make($attachmentFullPath);

            $image_resize->fit($dimensions['width'], $dimensions['height'], null, 'top');
            $image_resize->save($attachmentFullPath);
        }
    }
}
