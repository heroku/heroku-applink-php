<?php

/*
 * Copyright (c) 2026, Salesforce, Inc.
 * All rights reserved.
 * SPDX-License-Identifier: BSD-3-Clause
 * For full license text, see the LICENSE file in the repo root or https://opensource.org/licenses/BSD-3-Clause
 */

declare(strict_types=1);

namespace Heroku\AppLink;

/**
 * A Salesforce user.
 */
final readonly class User
{
    /**
     * @param string $id The ID of the user.
     * @param string $username The username of the user.
     */
    public function __construct(
        public string $id,
        public string $username,
    ) {}
}
