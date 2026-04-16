<?php
/**
 * ACF Pro Plugin.
 *
 * @package ContentPilot\Composer\WPProPlugins\Plugins
 */

namespace ContentPilot\Composer\WPProPlugins\Plugins;

/**
 * AcfPro class.
 */
class AcfPro extends AbstractPlugin {

	/**
	 * Get the download URL for this plugin.
	 *
	 * @return string
	 */
	public function getDownloadUrl() {
		return 'https://connect.advancedcustomfields.com/index.php?p=pro&a=download&k=' . getenv( 'ACF_PRO_KEY' ) . '&t=' . $this->version;
	}

}
