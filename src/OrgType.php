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
 * The type of a Salesforce org, as returned by the AppLink API.
 */
enum OrgType: string
{
    /** A Salesforce org. */
    case SalesforceOrg = 'SalesforceOrg';

    /** A Data 360 org. */
    case DataCloudOrg = 'DataCloudOrg';
}
