<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DownloadFile extends Component
{
    public function download($path)
    {
        return response()
            ->download(Storage::path($path))
            ->deleteFileAfterSend();
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
        </div>
        HTML;
    }
}
