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
 * ColorController
 */
class ColorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * colorRepository
     *
     * @var \Xeniathiem\XeniathiemSemps\Domain\Repository\ColorRepository
     */
    protected $colorRepository = null;

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Repository\ColorRepository $colorRepository
     */
    public function injectColorRepository(\Xeniathiem\XeniathiemSemps\Domain\Repository\ColorRepository $colorRepository)
    {
        $this->colorRepository = $colorRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $colors = $this->colorRepository->findAll();
        $this->view->assign('colors', $colors);
    }
}
