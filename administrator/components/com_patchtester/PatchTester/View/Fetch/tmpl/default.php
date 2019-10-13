<?php
/**
 * Patch testing component for the Joomla! CMS
 *
 * @copyright  Copyright (C) 2011 - 2012 Ian MacLennan, Copyright (C) 2013 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later
 */

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

/** @var \PatchTester\View\DefaultHtmlView $this */

HTMLHelper::_('jquery.framework');
HTMLHelper::_('behavior.core');
HTMLHelper::_('script', 'com_patchtester/fetcher.js', array('version' => 'auto', 'relative' => true));

?>

<div id="patchtester-container">
	<h1 id="patchtester-progress-header"><?php echo Text::_('COM_PATCHTESTER_FETCH_INITIALIZING'); ?></h1>
	<p id="patchtester-progress-message"><?php echo Text::_('COM_PATCHTESTER_FETCH_INITIALIZING_DESCRIPTION'); ?></p>
	<div id="progress" class="progress">
		<div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated bg-success" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
	</div>
	<input id="patchtester-token" type="hidden" name="<?php echo Factory::getSession()->getFormToken(); ?>" value="1" />
</div>
