<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Taxonomy\Repository;

use Doctrine\ORM\QueryBuilder;
use Sylius\Component\Resource\Repository\RepositoryInterface;
use Sylius\Component\Taxonomy\Model\TaxonInterface;

/**
 * @author Saša Stamenković <umpirsky@gmail.com>
 * @author Gonzalo Vilaseca <gvilaseca@reiss.co.uk>
 * @author Anna Walasek <anna.walasek@lakion.com>
 * @author Łukasz Chruściel <lukasz.chrusciel@lakion.com>
 */
interface TaxonRepositoryInterface extends RepositoryInterface
{
    /**
     * @param TaxonInterface $taxon
     *
     * @return TaxonInterface[]
     */
    public function findChildren(TaxonInterface $taxon);

    /**
     * @param TaxonInterface $taxon
     *
     * @return TaxonInterface[]
     */
    public function findChildrenAsTree(TaxonInterface $taxon);

    /**
     * @param string $code
     *
     * @return TaxonInterface[]
     */
    public function findChildrenByRootCode($code);

    /**
     * @param string $code
     *
     * @return TaxonInterface[]
     */
    public function findChildrenAsTreeByRootCode($code);

    /**
     * @return TaxonInterface[]
     */
    public function findRootNodes();

    /**
     * @return TaxonInterface[]
     */
    public function findNodesTreeSorted();
    
    /**
     * @param string $slug
     *
     * @return TaxonInterface|null
     */
    public function findOneBySlug($slug);

    /**
     * @param string $name
     * @param string $locale
     *
     * @return TaxonInterface[]
     */
    public function findByName($name, $locale);

    /**
     * @return QueryBuilder
     */
    public function createListQueryBuilder();
}
