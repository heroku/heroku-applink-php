<?php

/*
 * Copyright (c) 2026, Salesforce, Inc.
 * All rights reserved.
 * SPDX-License-Identifier: BSD-3-Clause
 * For full license text, see the LICENSE file in the repo root or https://opensource.org/licenses/BSD-3-Clause
 */

declare(strict_types=1);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PER-CS' => true,
        'header_comment' => [
            'header' => "Copyright (c) 2026, Salesforce, Inc.\nAll rights reserved.\nSPDX-License-Identifier: BSD-3-Clause\nFor full license text, see the LICENSE file in the repo root or https://opensource.org/licenses/BSD-3-Clause",
            'comment_type' => 'comment',
            'location' => 'after_open',
        ],
        'declare_strict_types' => true,
        'no_unused_imports' => true,
        'ordered_imports' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder(PhpCsFixer\Finder::create()->in(__DIR__)->exclude('vendor'));
