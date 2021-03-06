<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Customer\CustomerData;

/**
 * Js layout data provider pool interface
 */
interface JsLayoutDataProviderPoolInterface
{
    /**
     * Get data
     *
     * @return array
     */
    public function getData();
}
