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
 * The AppLink API responded with a 2xx status, but unexpected content, for example a response
 * with a missing required field.
 */
final class UnexpectedResponseException extends AppLinkException {}
