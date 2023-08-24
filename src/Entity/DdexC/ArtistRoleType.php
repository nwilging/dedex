<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ArtistRoleType
 *
 * A ddex:Composite containing details of an ddex:ArtistRole. Note: This can be used in a ddex:DdexMessage in relation to any ddex:Performance or ddex:Fixation either of which may form the whole or part of the ddex:Resource itself. Example: if an 'AssociatedPerformer' is shown as a ddex:Contributor to a ddex:MusicalWork it refers to a ddex:Performer of a ddex:Resource (e.g. a ddex:SoundRecording) expressing the ddex:MusicalWork.
 * XSD Type: ArtistRole
 */
class ArtistRoleType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ddex:Namespace of the ddexC:ArtistRole. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A ddex:UserDefined value of the ddexC:ArtistRole. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as namespace
     *
     * The ddex:Namespace of the ddexC:ArtistRole. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * The ddex:Namespace of the ddexC:ArtistRole. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as userDefinedValue
     *
     * A ddex:UserDefined value of the ddexC:ArtistRole. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A ddex:UserDefined value of the ddexC:ArtistRole. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue($userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }
}

