<?php

if (!defined('_TB_VERSION_')) {
    return;
}

function upgrade_module_2_1_0($module)
{
    /** @var HomeFeatured $module */
    Configuration::updateValue('HOME_FEATURED_TTL', 300); // Cache for max 5 minutes

    $module->clearCache();

    return true;
}
