<?php

declare(strict_types=1);

namespace Xeniathiem\XeniathiemSemps\Controller;


/**
 * This file is part of the "Xenia Thiem Semps" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Xenia Thiem <xt@xeniathiem.de>
 */


/**
 * FamilyController
 */
class FamilyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * familyRepository
     *
     * @var \Xeniathiem\XeniathiemSemps\Domain\Repository\FamilyRepository
     */
    protected $familyRepository = null;

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Repository\FamilyRepository $familyRepository
     */
    public function injectFamilyRepository(\Xeniathiem\XeniathiemSemps\Domain\Repository\FamilyRepository $familyRepository)
    {
        $this->familyRepository = $familyRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $families = $this->familyRepository->findAll();
        $this->view->assign('families', $families);
    }
}
