<?php

namespace Workbench\App\Jobs;

use EdStevo\LaravelShopifyGraph\Dtos\FileCreateInput;
use EdStevo\LaravelShopifyGraph\Enums\FileContentType;
use EdStevo\LaravelShopifyGraph\LaravelShopifyGraphJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Arr;
use Workbench\App\Models\File;

class TestRequestJob extends LaravelShopifyGraphJob implements ShouldQueue
{
    public function __construct(public File $file, public string $shopDomain, public string $accessToken) {}

    public function query(): string
    {
        return '
            mutation fileCreate($files: [FileCreateInput!]!) {
              fileCreate(files: $files) {
                files {
                  id
                }
                userErrors {
                  field
                  message
                }
              }
            }
        ';
    }

    public function variables(): array
    {
        return [
            'files' => [
                FileCreateInput::from([
                    'filename' => $this->file->filename,
                    'contentType' => FileContentType::IMAGE,
                ])->toArray(),
            ],
        ];
    }

    public function handleResponse(array $data): void
    {
        $id = Arr::get($data, 'fileCreate.files.0.id');
        $this->file->update(['shopify_id' => $id]);
    }

    public function getShopDomain(): string
    {
        return $this->shopDomain;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
