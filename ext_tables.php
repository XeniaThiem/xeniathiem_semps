<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_xeniathiemsemps_domain_model_semps', 'EXT:xeniathiem_semps/Resources/Private/Language/locallang_csh_tx_xeniathiemsemps_domain_model_semps.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_xeniathiemsemps_domain_model_semps');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_xeniathiemsemps_domain_model_color', 'EXT:xeniathiem_semps/Resources/Private/Language/locallang_csh_tx_xeniathiemsemps_domain_model_color.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_xeniathiemsemps_domain_model_color');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_xeniathiemsemps_domain_model_breeder', 'EXT:xeniathiem_semps/Resources/Private/Language/locallang_csh_tx_xeniathiemsemps_domain_model_breeder.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_xeniathiemsemps_domain_model_breeder');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_xeniathiemsemps_domain_model_family', 'EXT:xeniathiem_semps/Resources/Private/Language/locallang_csh_tx_xeniathiemsemps_domain_model_family.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_xeniathiemsemps_domain_model_family');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_xeniathiemsemps_domain_model_category', 'EXT:xeniathiem_semps/Resources/Private/Language/locallang_csh_tx_xeniathiemsemps_domain_model_category.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_xeniathiemsemps_domain_model_category');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_xeniathiemsemps_domain_model_tag', 'EXT:xeniathiem_semps/Resources/Private/Language/locallang_csh_tx_xeniathiemsemps_domain_model_tag.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_xeniathiemsemps_domain_model_tag');

    $GLOBALS['PAGES_TYPES'][\Xeniathiem\XeniathiemSemps\Domain\Model\Semps::SEMPS_PAGE_TYPE] = [
      'type' => 'web',
      'allowedTables' => '*',
    ];

});
