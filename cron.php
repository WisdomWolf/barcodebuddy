<?php

/**
 * Barcode Buddy for Grocy
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.0 of the GNU General
 * Public License v3.0 that is attached to this project.
 *
 * @author     Marc Ole Bulling
 * @copyright  2020 Marc Ole Bulling
 * @license    https://www.gnu.org/licenses/gpl-3.0.en.html  GNU GPL v3.0
 * @since      File available since Release 1.6
 *
 * Cron file to update cache
 */


require_once __DIR__ . "/incl/config.inc.php";

$config = BBConfig::getInstance();
if ($config["USE_REDIS"])
    updateCache();

function updateCache() {
    API::getAllProductsInfo(true);
    API::getAllBarcodes(true);
}
