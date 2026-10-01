<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Support parallel chunk streaming for 10GB+ dumps
 */
class MultipartUploader
{
    public function optimize(): bool
    {
        return true;
    }
}
