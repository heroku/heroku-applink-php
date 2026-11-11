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
 * A request to the AppLink API didn't complete, for example because the connection failed or
 * timed out.
 */
final class TransportException extends AppLinkException {}
