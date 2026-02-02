<?php

it('should dispatch ok', function () {
    \Illuminate\Support\Facades\Bus::fake();

    $shopDomain = fake()->word.'.myshopify.com';
    $accessToken = \Illuminate\Support\Str::random();
    $file = \Workbench\App\Models\File::factory()->create();
    \Workbench\App\Jobs\TestRequestJob::dispatch($file, $shopDomain, $accessToken);

    Bus::assertDispatched(\Workbench\App\Jobs\TestRequestJob::class);
});

it('should request ok', function () {
    $shopDomain = fake()->word.'.myshopify.com';
    $accessToken = \Illuminate\Support\Str::random();
    $shopifyId = \Illuminate\Support\Str::random();

    \Illuminate\Support\Facades\Http::fake([
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

    $file = \Workbench\App\Models\File::factory()->create();
    \Workbench\App\Jobs\TestRequestJob::dispatch($file, $shopDomain, $accessToken);

    Http::assertSentCount(1);

    expect($file->fresh()->shopify_id)->toBe($shopifyId);
});
