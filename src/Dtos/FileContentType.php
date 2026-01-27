<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

enum FileContentType: string
{
    case EXTERNAL_VIDEO = 'EXTERNAL_VIDEO';
    case FILE = 'FILE';
    case IMAGE = 'IMAGE';
    case MODEL_3D = 'MODEL_3D';
    case VIDEO = 'VIDEO';
}
