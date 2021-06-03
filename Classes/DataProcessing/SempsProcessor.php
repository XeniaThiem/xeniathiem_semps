<?php

declare(strict_types=1);

namespace Xeniathiem\XeniathiemSemps\DataProcessing;

/**
 * This file is part of the "Xenia Thiem Semps" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Xenia Thiem <xt@xeniathiem.de>
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use Xeniathiem\XeniathiemSemps\Domain\Repository\SempsRepository;
use Xeniathiem\XeniathiemSemps\Domain\Model\Semps;

/**
 * @package XeniathiemSemps
 * @subpackage DataProcessing
*/
class SempsProcessor implements DataProcessorInterface
{

  /**
  * @var SempsRepository
  */
  protected $sempsRepository;

  public function __construct(SempsRepository $sempsRepository)
  {
    $this->sempsRepository = $sempsRepository;
  }

  /**
  * @param ContentObjectRenderer $cObj
  * @param array $contentObjectConfiguration
  * @param array $processorConfiguration
  * @param array $processedData
  * @return array
  */
   public function process(
      ContentObjectRenderer $cObj,
      array $contentObjectConfiguration,
      array $processorConfiguration,
      array $processedData
   ) {
      if (isset($processorConfiguration['if.']) && !$cObj->checkIf($processorConfiguration['if.'])) {
         // leave $processedData unchanged in case there were previous other processors
         return $processedData;
      }

      $processedData['semps'] = [];

      $currentDoktype = $GLOBALS['TSFE']->page['doktype'];
      $currentRootline = $GLOBALS['TSFE']->rootLine[0]['uid'];

      $currentId = $GLOBALS['TSFE']->id;

      if ($currentRootline === 1 && $currentDoktype === 71) {
        $semps = $this->sempsRepository->findByUid($currentId);
      }

      if ($semps instanceof Semps) {
        $processedData['semps'] = $semps;
      }

      return $processedData;
   }
}
