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
 * The org and user an app acts for.
 */
abstract readonly class AppLinkContext
{
    /**
     * @param Org $org The Salesforce org.
     * @param User $user The Salesforce user.
     */
    public function __construct(
        public Org $org,
        public User $user,
    ) {}
}
