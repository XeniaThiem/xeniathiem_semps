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
 * SempsController
 */
class SempsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * sempsRepository
     *
     * @var \Xeniathiem\XeniathiemSemps\Domain\Repository\SempsRepository
     */
    protected $sempsRepository = null;

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Repository\SempsRepository $sempsRepository
     */
    public function injectSempsRepository(\Xeniathiem\XeniathiemSemps\Domain\Repository\SempsRepository $sempsRepository)
    {
        $this->sempsRepository = $sempsRepository;
    }

    /**
     * @return string|object|null|void
     */
    public function listSempsAction()
    {

      if (isset($this->settings['sempscategorychoice']) && $this->settings['sempscategorychoice'] !== '') {
        $categories = explode(',', $this->settings['sempscategorychoice']);
      }
      if (isset($this->settings['sempsfamilychoice']) && $this->settings['sempsfamilychoice'] !== '') {
        $families = explode(',', $this->settings['sempsfamilychoice']);
      }
      $semps = $this->sempsRepository->findByCategoryAndFamily($categories, $families);

      $this->view->assign('semps', $semps);
    }

    /**
     * @return string|object|null|void
     */
    public function teaserAction()
    {
        $semps = $this->sempsRepository->findAll();
        $this->view->assign('semps', $semps);
    }
}
