<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'XeniathiemSemps',
    'Sempslist',
    'Semps Liste'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'XeniathiemSemps',
    'Sempsteaser',
    'Semps Teaser'
);

$flexforms = [
  'xeniathiemsemps_sempslist' => '/Configuration/FlexForm/SempsList.xml',
  'xeniathiemsemps_sempsteaser' => '/Configuration/FlexForm/SempsTeaser.xml'
];

foreach ($flexforms as $pluginSignature => $path) {

  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'recursive,select_key,pages';

  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
      $pluginSignature,
      // Flexform configuration schema file
      'FILE:EXT:xeniathiem_semps' . $path
  );
}
