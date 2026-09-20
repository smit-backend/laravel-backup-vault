<?php

declare(strict_types=1);

namespace SmitBackend\BackupVault;

use SmitBackend\BackupVault\Contracts\EncryptedStreamInterface;

/**
 * Class BackupVault
 *
 * @package SmitBackend\BackupVault
 */
class BackupVault implements EncryptedStreamInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
