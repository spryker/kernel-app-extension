<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\KernelAppExtension;

use Generated\Shared\Transfer\AcpHttpRequestTransfer;

interface RequestExpanderPluginInterface
{
    public function expandRequest(AcpHttpRequestTransfer $acpHttpRequestTransfer): AcpHttpRequestTransfer;
}
