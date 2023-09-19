<?php

namespace Tests\Feature\Livewire;

use App\Livewire\DownloadFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class DownloadFileTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Storage::fake();
        Storage::put('test.txt', 'test');

        Livewire::test(DownloadFile::class)
            ->call('download', path: 'test.txt')
            ->assertFileDownloaded('test.txt', 'test');
    }
}
