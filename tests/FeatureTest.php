<?php

test('get id from graph id ok', function () {
    $id = 959752435;
    $graphId = "gid://shopify/Article/" . $id;
    $res = \EdStevo\LaravelShopifyGraph\Facades\LaravelShopifyGraph::getIdFromGraphId($graphId);

    expect($res)->toEqual($id);
});

test('make graph id from id ok', function () {
    $id = 959752435;
    $resource = "Article";
    $res = \EdStevo\LaravelShopifyGraph\Facades\LaravelShopifyGraph::makeGraphIdFromId($resource, $id);

    expect($res)->toEqual("gid://shopify/Article/" . $id);
});
