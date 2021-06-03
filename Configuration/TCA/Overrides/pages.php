<?php
if (!defined('TYPO3_MODE')) {
  die('Access denied.');
}

$columns = [
  'sorting' => [
    'config' => [
      'type' => 'passthrough',
    ]
  ],
  'xeniathiem_semps_title' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.title',
    'config' => [
       'type' => 'input',
       'size' => 30,
       'eval' => 'trim,required'
     ],
  ],
  'xeniathiem_semps_description' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.description',
    'config' => [
      'type' => 'text',
      'enableRichtext' => 1,
      'fieldControl' => [
        'fullScreenRichtext' => [
          'disabled' => 0,
        ],
      ],
      'cols' => 40,
      'rows' => 15,
      'eval' => 'trim',
    ]
  ],
  'xeniathiem_semps_gallery' => [
    'exclude' => 1,
    'label' =>'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.gallery',
    'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
      'xeniathiem_semps_gallery', [
        'appearance' => [
            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            'collapseAll' => 1,
        ],
        'overrideChildTca' => [
          'types' => [
            '0' => [
              'showitem' => '
                  --palette--;;imageoverlayPalette,
                  --palette--;;filePalette'
              ],
              \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                  'showitem' => '
                      --palette--;;imageoverlayPalette,
                      --palette--;;filePalette'
              ],
            ],
          ],
          'maxitems' => 100
    ], $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'])
  ],
  'xeniathiem_semps_teaserimage' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.teaserimage',
    'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
      'xeniathiem_semps_teaserimage', [
        'appearance' => [
            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            'collapseAll' => 1,
        ],
        'overrideChildTca' => [
          'types' => [
            '0' => [
              'showitem' => '
                  --palette--;;imageoverlayPalette,
                  --palette--;;filePalette'
              ],
              \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                  'showitem' => '
                      --palette--;;imageoverlayPalette,
                      --palette--;;filePalette'
              ],
            ],
          ],
          'maxitems' => 1,
    ], $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'])
  ],
  'xeniathiem_semps_mother' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.mother',
    'config' => [
      'type' => 'select',
      'renderType' =>'selectMultipleSideBySide',
      'foreign_table' => 'pages',
      'foreign_table_where' => 'AND pages.hidden = 0 AND pages.deleted = 0 AND pages.doktype = 71',
      'MM' => 'tx_xeniathiemsemps_domain_model_pages_pages_mm',
      'enableMultiSelectFilterTextfield' => 1,
      'multiSelectFilterItems' => []
    ]
  ],
  'xeniathiem_semps_year' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.year',
    'config' => [
       'type' => 'input',
       'renderType' => 'inputDateTime',
        'eval' => 'datetime',
     ],
  ],
  'xeniathiem_semps_colors' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.colors',
    'config' => [
      'type' => 'select',
      'renderType' =>'selectMultipleSideBySide',
      'foreign_table' => 'tx_xeniathiemsemps_domain_model_color',
      'foreign_table_where' => 'AND tx_xeniathiemsemps_domain_model_color.hidden = 0 AND tx_xeniathiemsemps_domain_model_color.deleted = 0',
      'MM' => 'tx_xeniathiemsemps_domain_model_colors_pages_mm',
      'enableMultiSelectFilterTextfield' => 1,
      'multiSelectFilterItems' => []
    ]
  ],
  'xeniathiem_semps_breeders' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.breeders',
    'config' => [
      'type' => 'select',
      'renderType' =>'selectMultipleSideBySide',
      'foreign_table' => 'tx_xeniathiemsemps_domain_model_breeder',
      'foreign_table_where' => 'AND tx_xeniathiemsemps_domain_model_breeder.hidden = 0 AND tx_xeniathiemsemps_domain_model_breeder.deleted = 0',
      'MM' => 'tx_xeniathiemsemps_domain_model_breeder_pages_mm',
      'enableMultiSelectFilterTextfield' => 1,
      'multiSelectFilterItems' => []
    ]
  ],
  'xeniathiem_semps_categories' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.categories',
    'config' => [
      'type' => 'select',
      'renderType' =>'selectMultipleSideBySide',
      'foreign_table' => 'tx_xeniathiemsemps_domain_model_category',
      'foreign_table_where' => 'AND tx_xeniathiemsemps_domain_model_category.hidden = 0 AND tx_xeniathiemsemps_domain_model_category.deleted = 0',
      'MM' => 'tx_xeniathiemsemps_domain_model_category_pages_mm',
      'enableMultiSelectFilterTextfield' => 1,
      'multiSelectFilterItems' => []
    ]
  ],
  'xeniathiem_semps_tags' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.tags',
    'config' => [
      'type' => 'select',
      'renderType' =>'selectMultipleSideBySide',
      'foreign_table' => 'tx_xeniathiemsemps_domain_model_tag',
      'foreign_table_where' => 'AND tx_xeniathiemsemps_domain_model_tag.hidden = 0 AND tx_xeniathiemsemps_domain_model_tag.deleted = 0',
      'MM' => 'tx_xeniathiemsemps_domain_model_pages_tags_mm',
      'enableMultiSelectFilterTextfield' => 1,
      'multiSelectFilterItems' => []
    ]
  ],
  'xeniathiem_semps_families' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps.pages.families',
    'config' => [
      'type' => 'select',
      'renderType' =>'selectMultipleSideBySide',
      'foreign_table' => 'tx_xeniathiemsemps_domain_model_family',
      'foreign_table_where' => 'AND tx_xeniathiemsemps_domain_model_family.hidden = 0 AND tx_xeniathiemsemps_domain_model_family.deleted = 0',
      'MM' => 'tx_xeniathiemsemps_domain_model_families_pages_mm',
      'enableMultiSelectFilterTextfield' => 1,
      'multiSelectFilterItems' => []
    ]
  ],



];

\TYPO3\CMS\CORE\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $columns);
\TYPO3\CMS\CORE\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', $columns);

unset($columns);

$tables = ['pages', 'pages_language_overlay'];

foreach ($tables as $table) {

  $GLOBALS['TCA'][$table]['types'][\Xeniathiem\XeniathiemSemps\Domain\Model\Semps::SEMPS_PAGE_TYPE] = $GLOBALS['TCA'][$table]['types'][1];

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    $table,
    'palette_semps',
    '--linebreak--,xeniathiem_semps_title,--linebreak--,xeniathiem_semps_description,--linebreak--,xeniathiem_semps_gallery,--linebreak--,xeniathiem_semps_teaserimage,--linebreak--,xeniathiem_semps_mother,--linebreak--,xeniathiem_semps_year,--linebreak--,xeniathiem_semps_colors,--linebreak--,xeniathiem_semps_breeders,--linebreak--,xeniathiem_semps_categories,--linebreak--,xeniathiem_semps_tags,--linebreak--,xeniathiem_semps_families'
  );

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    $table,
    '--palette--;;palette_semps',
    \Xeniathiem\XeniathiemSemps\Domain\Model\Semps::SEMPS_PAGE_TYPE,
    'after:subtitle'
  );

  // Add new page type as possible select item:
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
      $table,
      'doktype',
      [
          'LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang.xlf:semps_pagetype',
          \Xeniathiem\XeniathiemSemps\Domain\Model\Semps::SEMPS_PAGE_TYPE,
          'actions-heart'
      ],
      '1',
      'after'
  );

  \TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule(
      $GLOBALS['TCA'][$table],
      [
          // add icon for new page type:
          'ctrl' => [
              'typeicon_classes' => [
                \Xeniathiem\XeniathiemSemps\Domain\Model\Semps::SEMPS_PAGE_TYPE => 'actions-heart'
              ],
          ],
      ]
  );

}

unset($tables);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
   'xeniathiem_semps',
   'Configuration/TSconfig/page.tsconfig',
   'Semps TSconfig'
);
