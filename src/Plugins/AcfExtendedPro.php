<?php
/**
 * ACF Extended Pro Plugin.
 *
 * @package ContentPilot\Composer\WPProPlugins\Plugins
 */

namespace ContentPilot\Composer\WPProPlugins\Plugins;

use ContentPilot\Composer\WPProPlugins\Http;

/**
 * AcfExtendedPro class.
 */
class AcfExtendedPro extends AbstractEddPlugin {

	/**
	 * Get the download URL for this plugin.
	 *
	 * @return string
	 */
	public function getDownloadUrl() {
		$http     = new Http();
		$response = json_decode( $http->post( 'https://acf-extended.com', array(
			'edd_action' => 'get_version',
			'license'    => getenv( 'ACFE_PRO_KEY' ),
			'item_name'  => 'ACF Extended Pro',
			'url'        => getenv( 'ACFE_PRO_URL' ),
			'version'    => $this->version,
		) ), true );

		return $this->extractDownloadUrl( $response );
	}

}
