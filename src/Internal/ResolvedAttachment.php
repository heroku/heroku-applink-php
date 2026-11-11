<?php

/*
 * Copyright (c) 2026, Salesforce, Inc.
 * All rights reserved.
 * SPDX-License-Identifier: BSD-3-Clause
 * For full license text, see the LICENSE file in the repo root or https://opensource.org/licenses/BSD-3-Clause
 */

declare(strict_types=1);

namespace Heroku\AppLink\Internal;

/**
 * @internal
 */
final readonly class ResolvedAttachment
{
    public function __construct(
        public string $apiUrl,
        #[\SensitiveParameter]
        public string $token,
        public string $appId,
    ) {}

    /**
     * @return array{apiUrl: string, token: string, appId: string}
     */
    public function __debugInfo(): array
    {
        return ['apiUrl' => $this->apiUrl, 'token' => '[REDACTED]', 'appId' => $this->appId];
    }
}
