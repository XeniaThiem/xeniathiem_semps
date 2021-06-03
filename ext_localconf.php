<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'XeniathiemSemps',
            'Sempslist',
            [
                \Xeniathiem\XeniathiemSemps\Controller\SempsController::class => 'listSemps'
            ],
            // non-cacheable actions
            [
                \Xeniathiem\XeniathiemSemps\Controller\SempsController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\ColorController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\BreederController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\FamilyController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\CategoryController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\TagController::class => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'XeniathiemSemps',
            'Sempsteaser',
            [
                \Xeniathiem\XeniathiemSemps\Controller\SempsController::class => 'teaser'
            ],
            // non-cacheable actions
            [
                \Xeniathiem\XeniathiemSemps\Controller\SempsController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\ColorController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\BreederController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\FamilyController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\CategoryController::class => '',
                \Xeniathiem\XeniathiemSemps\Controller\TagController::class => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        sempslist {
                            iconIdentifier = xeniathiem_semps-plugin-sempslist
                            title = LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang_db.xlf:tx_xeniathiem_semps_sempslist.name
                            description = LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang_db.xlf:tx_xeniathiem_semps_sempslist.description
                            tt_content_defValues {
                                CType = list
                                list_type = xeniathiemsemps_sempslist
                            }
                        }
                        sempsteaser {
                            iconIdentifier = xeniathiem_semps-plugin-sempsteaser
                            title = LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang_db.xlf:tx_xeniathiem_semps_sempsteaser.name
                            description = LLL:EXT:xeniathiem_semps/Resources/Private/Language/locallang_db.xlf:tx_xeniathiem_semps_sempsteaser.description
                            tt_content_defValues {
                                CType = list
                                list_type = xeniathiemsemps_sempsteaser
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

			$iconRegistry->registerIcon(
				'xeniathiem_semps-plugin-sempslist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:xeniathiem_semps/Resources/Public/Icons/user_plugin_sempslist.svg']
			);

			$iconRegistry->registerIcon(
				'xeniathiem_semps-plugin-sempsteaser',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:xeniathiem_semps/Resources/Public/Icons/user_plugin_sempsteaser.svg']
			);

      // icon for page tree
      $iconRegistry->registerIcon(
        'xeniathiem_semps-semps-pagetype',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:xeniathiem_semps/Resources/Public/Icons/semps.svg']
      );

     // Allow backend users to drag and drop the new page type:
     \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
         'options.pageTree.doktypesToShowInNewPageDragArea := addToList(' . \Xeniathiem\XeniathiemSemps\Domain\Model\Semps::SEMPS_PAGE_TYPE . ')'
     );

    }
);
