<?php

declare(strict_types=1);

namespace Arobases\SyliusRightsManagementPlugin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Sylius\Component\Core\Model\Customer;
use Sylius\Component\Core\Model\CustomerInterface;
use Sylius\Component\Core\Model\Order;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\ToggleableTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="arobases_sylius_rights_management_right_group")
 */

class RightGroup implements ResourceInterface {


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected ?int $id = null;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected string $name;

    /**
     * @ORM\OneToMany(targetEntity="Arobases\SyliusRightsManagementPlugin\Entity\Right",
     *     mappedBy="rightGroup", fetch="EXTRA_LAZY",
     *     cascade={"persist", "remove"}
     *      )
     */

    protected Collection $rightGroup;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Collection
     */
    public function getRights(): Collection
    {
        return $this->rights;
    }

    /**
     * @param Collection $rights
     */
    public function setRights(Collection $rights): void
    {
        $this->rights = $rights;
    }





}