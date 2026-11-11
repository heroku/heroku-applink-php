<?php

/*
 * Copyright (c) 2026, Salesforce, Inc.
 * All rights reserved.
 * SPDX-License-Identifier: BSD-3-Clause
 * For full license text, see the LICENSE file in the repo root or https://opensource.org/licenses/BSD-3-Clause
 */

declare(strict_types=1);

namespace Heroku\AppLink\Tests\Support;

use Throwable;

final class Traces
{
    /**
     * Only frames called from the SDK's sources are exported, because PHPUnit's frames hold objects too
     * large to export.
     *
     * @param callable(): mixed $fn
     */
    public static function sdkArgs(callable $fn): string
    {
        $ignoreArgs = ini_set('zend.exception_ignore_args', '0');
        try {
            $fn();
        } catch (Throwable $e) {
            $args = [];
            foreach ($e->getTrace() as $frame) {
                if (str_starts_with($frame['file'] ?? '', dirname(__DIR__, 2) . '/src/')) {
                    $args[] = $frame['args'] ?? [];
                }
            }
            return var_export($args, true);
        } finally {
            ini_set('zend.exception_ignore_args', (string) $ignoreArgs);
        }
        throw new \LogicException('Expected an exception.');
    }
}
