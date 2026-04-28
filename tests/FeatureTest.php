<?php

use EdStevo\LaravelShopifyGraph\Dtos\AuthorInput;
use EdStevo\LaravelShopifyGraph\Facades\LaravelShopifyGraph;

test('get id from graph id ok', function () {
    $id = 959752435;
    $graphId = 'gid://shopify/Article/'.$id;
    $res = LaravelShopifyGraph::getIdFromGraphId($graphId);

    expect($res)->toEqual($id);
});

test('make graph id from id ok', function () {
    $id = 959752435;
    $resource = 'Article';
    $res = LaravelShopifyGraph::makeGraphIdFromId($resource, $id);

    expect($res)->toEqual('gid://shopify/Article/'.$id);
});

test('should not null optional values', function () {
    $name = fake()->name;

    $data = AuthorInput::validateAndCreate([
        'name' => $name,
    ]);

    $data = $data->toArray();

    expect($data['name'])->toEqual($name)
        ->and($data)->not->toHaveKey('userId');
});
