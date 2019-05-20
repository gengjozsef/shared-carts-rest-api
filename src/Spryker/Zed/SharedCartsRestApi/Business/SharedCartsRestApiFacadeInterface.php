<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SharedCartsRestApi\Business;

use Generated\Shared\Transfer\ShareCartRequestTransfer;
use Generated\Shared\Transfer\ShareCartResponseTransfer;

interface SharedCartsRestApiFacadeInterface
{
    /**
     * Specification:
     *  - Shares a quote with company user.
     *  - Quote uuid and ShareDetailTransfer should be provided in ShareCartRequestTransfer.
     *  - Company user id and quote permission group id should be provided in ShareDetailTransfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ShareCartRequestTransfer $shareCartRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ShareCartResponseTransfer
     */
    public function create(ShareCartRequestTransfer $shareCartRequestTransfer): ShareCartResponseTransfer;

    /**
     * Specification:
     *  - Updates permission group for shared cart.
     *  - ShareDetailTransfer should be provided in ShareCartRequestTransfer.
     *  - Quote company user uuid and quote permission group id should be provided in ShareDetailTransfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ShareCartRequestTransfer $shareCartRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ShareCartResponseTransfer
     */
    public function update(ShareCartRequestTransfer $shareCartRequestTransfer): ShareCartResponseTransfer;

    /**
     * Specification:
     *  - Removes sharing of the quote.
     *  - ShareDetailTransfer should be provided in ShareCartRequestTransfer.
     *  - Quote company user uuid should be provided in ShareDetailTransfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ShareCartRequestTransfer $shareCartRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ShareCartResponseTransfer
     */
    public function delete(ShareCartRequestTransfer $shareCartRequestTransfer): ShareCartResponseTransfer;
}
