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
 * The context of a stored AppLink authorization.
 */
final readonly class AuthorizationAppLinkContext extends AppLinkContext
{
    /**
     * @param Org $org The authorized org.
     * @param User $user The authorized user.
     * @param AuthorizationMetadata $authorizationMetadata Information about the authorization.
     * @param Credentials $credentials Credentials for the authorized user.
     */
    public function __construct(
        Org $org,
        User $user,
        public AuthorizationMetadata $authorizationMetadata,
        public Credentials $credentials,
    ) {
        parent::__construct($org, $user);
    }
}
