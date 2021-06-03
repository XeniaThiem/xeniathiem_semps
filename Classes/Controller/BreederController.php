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
 * BreederController
 */
class BreederController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * breederRepository
     *
     * @var \Xeniathiem\XeniathiemSemps\Domain\Repository\BreederRepository
     */
    protected $breederRepository = null;

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Repository\BreederRepository $breederRepository
     */
    public function injectBreederRepository(\Xeniathiem\XeniathiemSemps\Domain\Repository\BreederRepository $breederRepository)
    {
        $this->breederRepository = $breederRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $breeders = $this->breederRepository->findAll();
        $this->view->assign('breeders', $breeders);
    }
}
