<?php

use Illuminate\Support\Str;
use Workbench\App\Jobs\TestRequestJob;
use Workbench\App\Models\File;

it('should dispatch ok', function () {
    config()->set('shopify-graph.enabled', 'true');
    Illuminate\Support\Facades\Bus::fake();

    $shopDomain = fake()->word.'.myshopify.com';
    $accessToken = Str::random();
    $file = File::factory()->create();
    TestRequestJob::dispatch($file, $shopDomain, $accessToken);

    Bus::assertDispatched(TestRequestJob::class);
});

it('should request ok', function () {
    config()->set('shopify-graph.enabled', 'true');
    $shopDomain = fake()->word.'.myshopify.com';
    $accessToken = Str::random();
    $shopifyId = Str::random();

    Illuminate\Support\Facades\Http::fake([
        $shopDomain.'/*' => Http::response(['data' => [
            'fileCreate' => [
                'files' => [
                    [
                        'id' => $shopifyId,
                        'fileStatus' => 'READY',
                        'alt' => 'Product showcase image from staged upload',
                        'createdAt' => '2025-06-21T03:47:03Z',
                        'image' => [
                            'width' => 372,
                            'height' => 110,
                        ],
                    ],
                ],
                'userErrors' => [],
            ],
        ]], 200),
    ]);

    $file = File::factory()->create();
    $job = new TestRequestJob($file, $shopDomain, $accessToken);
    $job->handle();

    Http::assertSentCount(1);

    expect($file->fresh()->shopify_id)->toBe($shopifyId);
});
