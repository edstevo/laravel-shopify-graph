<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

class BlogUpdateInput extends BlogCreateInput
{
    /**
     * Whether to redirect blog posts automatically.
     */
    public bool $redirectArticles = false;

    /**
     * Whether a redirect is required after a new handle has been provided. If true, then the old handle is redirected to the new one automatically.
     */
    public bool $redirectNewHandle = false;
}
