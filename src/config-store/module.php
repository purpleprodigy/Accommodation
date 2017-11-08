<?php
/**
 * ConfigStore Module - bootstrap file
 *
 * @package     PurpleProdigy\ConfigStore
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\ConfigStore;

function autoload() {
	include __DIR__ . '/api.php';
	include __DIR__ . '/internals.php';
}

autoload();
