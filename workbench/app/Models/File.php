<?php

namespace Workbench\App\Models;

use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Workbench\Database\Factories\FileFactory;

/**
 * @property string $filename
 * @property string $shopify_id
 */
#[UseFactory(FileFactory::class)]
class File extends Model
{
    /** @use HasFactory<FileFactory> */
    use HasFactory;

    public $fillable = ['filename', 'shopify_id'];
}
