<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Workshop extends \App\Entity\Workshop implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'categorie' => [parent::class, 'categorie', null],
        "\0".parent::class."\0".'dateDebut' => [parent::class, 'dateDebut', null],
        "\0".parent::class."\0".'dateFin' => [parent::class, 'dateFin', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'image' => [parent::class, 'image', null],
        "\0".parent::class."\0".'seances' => [parent::class, 'seances', null],
        "\0".parent::class."\0".'titre' => [parent::class, 'titre', null],
        'categorie' => [parent::class, 'categorie', null],
        'dateDebut' => [parent::class, 'dateDebut', null],
        'dateFin' => [parent::class, 'dateFin', null],
        'description' => [parent::class, 'description', null],
        'id' => [parent::class, 'id', null],
        'image' => [parent::class, 'image', null],
        'seances' => [parent::class, 'seances', null],
        'titre' => [parent::class, 'titre', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
