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
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * categoryRepository
     *
     * @var \Xeniathiem\XeniathiemSemps\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository = null;

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Repository\CategoryRepository $categoryRepository
     */
    public function injectCategoryRepository(\Xeniathiem\XeniathiemSemps\Domain\Repository\CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }
}
