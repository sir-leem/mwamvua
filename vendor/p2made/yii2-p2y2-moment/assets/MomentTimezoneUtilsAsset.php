<?php
/**
 * MomentTimezoneUtilsAsset.php
 *
 * Yii2 asset for Moment Timezone
 * http://momentjs.com/timezone/
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment-timezone
 * @class \p2m\assets\MomentTimezoneUtilsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentTimezoneUtilsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentTimezoneUtilsAsset',
 */

namespace p2m\assets;

class MomentTimezoneUtilsAsset extends \p2m\assets\base\P2MomentAssetBase
{
	protected $version = $this->momentTimezoneVersion;

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/moment-##-version-##',
			'js' => [
				'moment-timezone-utils.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/moment-timezone/##-version-##',
			'js' => [
				'moment-timezone-utils.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
