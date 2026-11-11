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
 * The AppLink API returned the authorization, but it isn't authorized, for example because it is
 * still being authorized or was disconnected.
 */
final class UnusableAuthorizationException extends AppLinkException
{
    /**
     * @param AuthorizationStatus $status The status of the authorization.
     */
    public function __construct(
        string $message,
        public readonly AuthorizationStatus $status,
    ) {
        parent::__construct($message);
    }
}
