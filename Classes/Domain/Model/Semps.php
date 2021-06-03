<?php

declare(strict_types=1);

namespace Xeniathiem\XeniathiemSemps\Domain\Model;


/**
 * This file is part of the "Xenia Thiem Semps" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Xenia Thiem <xt@xeniathiem.de>
 */


/**
 * Semps
 */
class Semps extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    const SEMPS_PAGE_TYPE = 71;

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /*
    * @var string
    */
    protected $description = '';

    /**
     * teaserimage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $teaserimage = null;

    /**
     * gallery
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $gallery = null;

    /**
    * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Breeder>
    */
    protected $breeders;

    /**
    * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Category>
    */
    protected $categories;

    /**
    * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Color>
    */
    protected $colors;

    /**
    * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Family>
    */
    protected $families;

    /**
    * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Tag>
    */
    protected $tags;


    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the teaserimage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserimage
     */
    public function getTeaserimage()
    {
        return $this->teaserimage;
    }

    /**
     * Sets the teaserimage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserimage
     * @return void
     */
    public function setTeaserimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserimage)
    {
        $this->teaserimage = $teaserimage;
    }

    /**
     * Returns the gallery
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $gallery
     */
    public function getGallery()
    {
        return $this->gallery;
    }

    /**
     * Sets the gallery
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $gallery
     * @return void
     */
    public function setGallery(\TYPO3\CMS\Extbase\Domain\Model\FileReference $gallery)
    {
        $this->gallery = $gallery;
    }

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Model\Breeder
     * @return void
     */
    public function addBreeder(Breeder $breeder)
    {
       $this->breeders->attach($breeder);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Breeder>
     */
    public function getBreeders()
    {
       return $this->breeders;
    }

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Model\Category
     * @return void
     */
    public function addCategory(Category $category)
    {
       $this->categories->attach($category);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Category>
     */
    public function getCategories()
    {
       return $this->categories;
    }

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Model\Color
     * @return void
     */
    public function addColor(Color $color)
    {
       $this->colors->attach($color);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Color>
     */
    public function getColors()
    {
       return $this->colors;
    }

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Model\Family
     * @return void
     */
    public function addFamily(Family $family)
    {
       $this->families->attach($family);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Family>
     */
    public function getFamilies()
    {
       return $this->families;
    }

    /**
     * @param \Xeniathiem\XeniathiemSemps\Domain\Model\Tag
     * @return void
     */
    public function addTag(Tag $tag)
    {
       $this->tags->attach($tag);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xeniathiem\XeniathiemSemps\Domain\Model\Tag>
     */
    public function getTags()
    {
       return $this->tags;
    }
}
