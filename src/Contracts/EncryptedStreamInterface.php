<?php

declare(strict_types=1);

namespace SmitBackend\BackupVault\Contracts;

/**
 * Interface EncryptedStreamInterface
 *
 * @package SmitBackend\BackupVault
 */
interface EncryptedStreamInterface
{
    public function execute(array $payload = []): mixed;
}
