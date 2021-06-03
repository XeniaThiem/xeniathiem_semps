<?php

declare(strict_types=1);

namespace Xeniathiem\XeniathiemSemps\Domain\Repository;


/**
 * This file is part of the "Xenia Thiem Semps" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Xenia Thiem <xt@xeniathiem.de>
 */

use TYPO3\CMS\Extbase\Object\ObjectManagerInterface;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

/**
 * The repository for Semps
 */
class SempsRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

  /**
  * @var Typo3QuerySettings
  */
  protected $typo3QuerySettings;

  public function __construct(ObjectManagerInterface $objectManager, Typo3QuerySettings $typo3QuerySettings)
  {
    parent::__construct($objectManager);
    $this->typo3QuerySettings = $typo3QuerySettings;
  }

  public function initializeObject()
  {
    $this->typo3QuerySettings->setRespectStoragePage(false);

    $this->setDefaultQuerySettings($this->typo3QuerySettings);
  }

  public function findByCategoryAndFamily($categories = null, $families = null)
  {
    $query = $this->createQuery();
    $constraints = [];
    $orConstraintsCategory = [];
    $orConstraintsFamily = [];

    if ($categories !== null) {
      foreach ($categories as $category) {
        $orConstraintsCategory[] = $query->contains('categories', (int) $category);
      }
      $constraints[] = $query->logicalOr($orConstraintsCategory);
    }
    if ($families !== null) {
      foreach ($families as $family) {
        $orConstraintsFamily[] = $query->contains('families', (int) $family);
      }

      $constraints[] = $query->logicalOr($orConstraintsFamily);
    }


    $query->matching($query->logicalAnd($constraints));

    return $query->execute();
  }
}
