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
final readonly class HttpResponse
{
    public function __construct(
        public int $status,
        #[\SensitiveParameter]
        public string $body,
        public bool $bodyTooLarge,
    ) {}
}
