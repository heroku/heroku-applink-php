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
 * Data sent to the app is missing or can't be parsed, for example a missing or malformed
 * `x-client-context` header.
 */
final class InvalidInboundDataException extends AppLinkException {}
