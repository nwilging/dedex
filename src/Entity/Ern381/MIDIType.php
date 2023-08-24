<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing MIDIType
 *
 * A Composite containing details of a MIDI.
 * XSD Type: MIDI
 */
class MIDIType
{
    /**
     * The Flag indicating whether the MIDI Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MIDI data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of the MIDI as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the Type of the MIDI.
     *
     * @var \DedexBundle\Entity\Ern381\MidiTypeType $midiType
     */
    private $midiType = null;

    /**
     * The Flag indicating whether the MIDI is related to an Artist (=true) or not (=false).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A Composite containing details of Identifiers of the Midi.
     *
     * @var \DedexBundle\Entity\Ern381\ResourceProprietaryIdType[] $midiId
     */
    private $midiId = [
        
    ];

    /**
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the MIDI.
     *
     * @var \DedexBundle\Entity\Ern381\MusicalWorkIdType[] $indirectMidiId
     */
    private $indirectMidiId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the MIDI within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the ReferenceTitle of the MIDI.
     *
     * @var \DedexBundle\Entity\Ern381\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing a Description of the Type of instrumentation of the MusicalWork(s) in the MIDI.
     *
     * @var \DedexBundle\Entity\Ern381\DescriptionType $instrumentationDescription
     */
    private $instrumentationDescription = null;

    /**
     * The Flag indicating whether the MIDI is a Medley (=true) or not (=false).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * The Flag indicating whether the MIDI is a Potpourri (=true) or not (=false).
     *
     * @var bool $isPotpourri
     */
    private $isPotpourri = null;

    /**
     * The Flag indicating whether the MIDI is instrumental (=true) or not (=false).
     *
     * @var bool $isInstrumental
     */
    private $isInstrumental = null;

    /**
     * The Flag indicating whether the MIDI is used as background to other audio or audiovisual material (=true) or not (=false).
     *
     * @var bool $isBackground
     */
    private $isBackground = null;

    /**
     * The Flag indicating whether the MIDI is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @var bool $isHiddenResource
     */
    private $isHiddenResource = null;

    /**
     * The Flag indicating whether the MIDI is additional to those on the original Release of which this is a Version (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it. The IsBonusResource element in ResourceGroupContentItem should be used instead.
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * The Flag indicating whether the MIDI is generated by a computer (=true) or not (=false).
     *
     * @var bool $isComputerGenerated
     */
    private $isComputerGenerated = null;

    /**
     * The Flag indicating whether the MIDI is preceded by a period of silence (=false) or not (=true).
     *
     * @var bool $noSilenceBefore
     */
    private $noSilenceBefore = null;

    /**
     * The Flag indicating whether the MIDI is followed by a period of silence (=false) or not (=true).
     *
     * @var bool $noSilenceAfter
     */
    private $noSilenceAfter = null;

    /**
     * A Flag indicating whether performer information is required (=true) or not (=false) when communicating details of the MIDI.
     *
     * @var bool $performerInformationRequired
     */
    private $performerInformationRequired = null;

    /**
     * The Language of the Performance recorded in the MIDI (represented by an ISO 639-2 LanguageCode).
     *
     * @var string $languageOfPerformance
     */
    private $languageOfPerformance = null;

    /**
     * The Duration of the MIDI (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the MIDI.
     *
     * @var \DedexBundle\Entity\Ern381\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of one or more MusicalWorks contained in the MIDI.
     *
     * @var \DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current MIDI.
     *
     * @var \DedexBundle\Entity\Ern381\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the MIDI was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the MIDI was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]]. This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $masteredDate
     */
    private $masteredDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the MIDI was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]]. This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $remasteredDate
     */
    private $remasteredDate = null;

    /**
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @var \DedexBundle\Entity\Ern381\MidiDetailsByTerritoryType[] $midiDetailsByTerritory
     */
    private $midiDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the MIDI Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MIDI data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @return bool
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Sets a new isUpdated
     *
     * The Flag indicating whether the MIDI Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MIDI data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @param bool $isUpdated
     * @return self
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the MIDI as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of the MIDI as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as midiType
     *
     * A Composite containing details of the Type of the MIDI.
     *
     * @return \DedexBundle\Entity\Ern381\MidiTypeType
     */
    public function getMidiType()
    {
        return $this->midiType;
    }

    /**
     * Sets a new midiType
     *
     * A Composite containing details of the Type of the MIDI.
     *
     * @param \DedexBundle\Entity\Ern381\MidiTypeType $midiType
     * @return self
     */
    public function setMidiType(?\DedexBundle\Entity\Ern381\MidiTypeType $midiType = null)
    {
        $this->midiType = $midiType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The Flag indicating whether the MIDI is related to an Artist (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsArtistRelated()
    {
        return $this->isArtistRelated;
    }

    /**
     * Sets a new isArtistRelated
     *
     * The Flag indicating whether the MIDI is related to an Artist (=true) or not (=false).
     *
     * @param bool $isArtistRelated
     * @return self
     */
    public function setIsArtistRelated($isArtistRelated)
    {
        $this->isArtistRelated = $isArtistRelated;
        return $this;
    }

    /**
     * Adds as midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ResourceProprietaryIdType $midiId
     */
    public function addToMidiId(\DedexBundle\Entity\Ern381\ResourceProprietaryIdType $midiId)
    {
        $this->midiId[] = $midiId;
        return $this;
    }

    /**
     * isset midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMidiId($index)
    {
        return isset($this->midiId[$index]);
    }

    /**
     * unset midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMidiId($index)
    {
        unset($this->midiId[$index]);
    }

    /**
     * Gets as midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @return \DedexBundle\Entity\Ern381\ResourceProprietaryIdType[]
     */
    public function getMidiId()
    {
        return $this->midiId;
    }

    /**
     * Sets a new midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @param \DedexBundle\Entity\Ern381\ResourceProprietaryIdType[] $midiId
     * @return self
     */
    public function setMidiId(array $midiId)
    {
        $this->midiId = $midiId;
        return $this;
    }

    /**
     * Adds as indirectMidiId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\MusicalWorkIdType $indirectMidiId
     */
    public function addToIndirectMidiId(\DedexBundle\Entity\Ern381\MusicalWorkIdType $indirectMidiId)
    {
        $this->indirectMidiId[] = $indirectMidiId;
        return $this;
    }

    /**
     * isset indirectMidiId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the MIDI.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectMidiId($index)
    {
        return isset($this->indirectMidiId[$index]);
    }

    /**
     * unset indirectMidiId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the MIDI.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectMidiId($index)
    {
        unset($this->indirectMidiId[$index]);
    }

    /**
     * Gets as indirectMidiId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the MIDI.
     *
     * @return \DedexBundle\Entity\Ern381\MusicalWorkIdType[]
     */
    public function getIndirectMidiId()
    {
        return $this->indirectMidiId;
    }

    /**
     * Sets a new indirectMidiId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the MIDI.
     *
     * @param \DedexBundle\Entity\Ern381\MusicalWorkIdType[] $indirectMidiId
     * @return self
     */
    public function setIndirectMidiId(array $indirectMidiId = null)
    {
        $this->indirectMidiId = $indirectMidiId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message) of the MIDI within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @return string
     */
    public function getResourceReference()
    {
        return $this->resourceReference;
    }

    /**
     * Sets a new resourceReference
     *
     * The Identifier (specific to the Message) of the MIDI within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @param string $resourceReference
     * @return self
     */
    public function setResourceReference($resourceReference)
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the MIDI.
     *
     * @return \DedexBundle\Entity\Ern381\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the MIDI.
     *
     * @param \DedexBundle\Entity\Ern381\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DedexBundle\Entity\Ern381\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Gets as instrumentationDescription
     *
     * A Composite containing a Description of the Type of instrumentation of the MusicalWork(s) in the MIDI.
     *
     * @return \DedexBundle\Entity\Ern381\DescriptionType
     */
    public function getInstrumentationDescription()
    {
        return $this->instrumentationDescription;
    }

    /**
     * Sets a new instrumentationDescription
     *
     * A Composite containing a Description of the Type of instrumentation of the MusicalWork(s) in the MIDI.
     *
     * @param \DedexBundle\Entity\Ern381\DescriptionType $instrumentationDescription
     * @return self
     */
    public function setInstrumentationDescription(?\DedexBundle\Entity\Ern381\DescriptionType $instrumentationDescription = null)
    {
        $this->instrumentationDescription = $instrumentationDescription;
        return $this;
    }

    /**
     * Gets as isMedley
     *
     * The Flag indicating whether the MIDI is a Medley (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsMedley()
    {
        return $this->isMedley;
    }

    /**
     * Sets a new isMedley
     *
     * The Flag indicating whether the MIDI is a Medley (=true) or not (=false).
     *
     * @param bool $isMedley
     * @return self
     */
    public function setIsMedley($isMedley)
    {
        $this->isMedley = $isMedley;
        return $this;
    }

    /**
     * Gets as isPotpourri
     *
     * The Flag indicating whether the MIDI is a Potpourri (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsPotpourri()
    {
        return $this->isPotpourri;
    }

    /**
     * Sets a new isPotpourri
     *
     * The Flag indicating whether the MIDI is a Potpourri (=true) or not (=false).
     *
     * @param bool $isPotpourri
     * @return self
     */
    public function setIsPotpourri($isPotpourri)
    {
        $this->isPotpourri = $isPotpourri;
        return $this;
    }

    /**
     * Gets as isInstrumental
     *
     * The Flag indicating whether the MIDI is instrumental (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsInstrumental()
    {
        return $this->isInstrumental;
    }

    /**
     * Sets a new isInstrumental
     *
     * The Flag indicating whether the MIDI is instrumental (=true) or not (=false).
     *
     * @param bool $isInstrumental
     * @return self
     */
    public function setIsInstrumental($isInstrumental)
    {
        $this->isInstrumental = $isInstrumental;
        return $this;
    }

    /**
     * Gets as isBackground
     *
     * The Flag indicating whether the MIDI is used as background to other audio or audiovisual material (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsBackground()
    {
        return $this->isBackground;
    }

    /**
     * Sets a new isBackground
     *
     * The Flag indicating whether the MIDI is used as background to other audio or audiovisual material (=true) or not (=false).
     *
     * @param bool $isBackground
     * @return self
     */
    public function setIsBackground($isBackground)
    {
        $this->isBackground = $isBackground;
        return $this;
    }

    /**
     * Gets as isHiddenResource
     *
     * The Flag indicating whether the MIDI is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsHiddenResource()
    {
        return $this->isHiddenResource;
    }

    /**
     * Sets a new isHiddenResource
     *
     * The Flag indicating whether the MIDI is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @param bool $isHiddenResource
     * @return self
     */
    public function setIsHiddenResource($isHiddenResource)
    {
        $this->isHiddenResource = $isHiddenResource;
        return $this;
    }

    /**
     * Gets as isBonusResource
     *
     * The Flag indicating whether the MIDI is additional to those on the original Release of which this is a Version (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it. The IsBonusResource element in ResourceGroupContentItem should be used instead.
     *
     * @return bool
     */
    public function getIsBonusResource()
    {
        return $this->isBonusResource;
    }

    /**
     * Sets a new isBonusResource
     *
     * The Flag indicating whether the MIDI is additional to those on the original Release of which this is a Version (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it. The IsBonusResource element in ResourceGroupContentItem should be used instead.
     *
     * @param bool $isBonusResource
     * @return self
     */
    public function setIsBonusResource($isBonusResource)
    {
        $this->isBonusResource = $isBonusResource;
        return $this;
    }

    /**
     * Gets as isComputerGenerated
     *
     * The Flag indicating whether the MIDI is generated by a computer (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsComputerGenerated()
    {
        return $this->isComputerGenerated;
    }

    /**
     * Sets a new isComputerGenerated
     *
     * The Flag indicating whether the MIDI is generated by a computer (=true) or not (=false).
     *
     * @param bool $isComputerGenerated
     * @return self
     */
    public function setIsComputerGenerated($isComputerGenerated)
    {
        $this->isComputerGenerated = $isComputerGenerated;
        return $this;
    }

    /**
     * Gets as noSilenceBefore
     *
     * The Flag indicating whether the MIDI is preceded by a period of silence (=false) or not (=true).
     *
     * @return bool
     */
    public function getNoSilenceBefore()
    {
        return $this->noSilenceBefore;
    }

    /**
     * Sets a new noSilenceBefore
     *
     * The Flag indicating whether the MIDI is preceded by a period of silence (=false) or not (=true).
     *
     * @param bool $noSilenceBefore
     * @return self
     */
    public function setNoSilenceBefore($noSilenceBefore)
    {
        $this->noSilenceBefore = $noSilenceBefore;
        return $this;
    }

    /**
     * Gets as noSilenceAfter
     *
     * The Flag indicating whether the MIDI is followed by a period of silence (=false) or not (=true).
     *
     * @return bool
     */
    public function getNoSilenceAfter()
    {
        return $this->noSilenceAfter;
    }

    /**
     * Sets a new noSilenceAfter
     *
     * The Flag indicating whether the MIDI is followed by a period of silence (=false) or not (=true).
     *
     * @param bool $noSilenceAfter
     * @return self
     */
    public function setNoSilenceAfter($noSilenceAfter)
    {
        $this->noSilenceAfter = $noSilenceAfter;
        return $this;
    }

    /**
     * Gets as performerInformationRequired
     *
     * A Flag indicating whether performer information is required (=true) or not (=false) when communicating details of the MIDI.
     *
     * @return bool
     */
    public function getPerformerInformationRequired()
    {
        return $this->performerInformationRequired;
    }

    /**
     * Sets a new performerInformationRequired
     *
     * A Flag indicating whether performer information is required (=true) or not (=false) when communicating details of the MIDI.
     *
     * @param bool $performerInformationRequired
     * @return self
     */
    public function setPerformerInformationRequired($performerInformationRequired)
    {
        $this->performerInformationRequired = $performerInformationRequired;
        return $this;
    }

    /**
     * Gets as languageOfPerformance
     *
     * The Language of the Performance recorded in the MIDI (represented by an ISO 639-2 LanguageCode).
     *
     * @return string
     */
    public function getLanguageOfPerformance()
    {
        return $this->languageOfPerformance;
    }

    /**
     * Sets a new languageOfPerformance
     *
     * The Language of the Performance recorded in the MIDI (represented by an ISO 639-2 LanguageCode).
     *
     * @param string $languageOfPerformance
     * @return self
     */
    public function setLanguageOfPerformance($languageOfPerformance)
    {
        $this->languageOfPerformance = $languageOfPerformance;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the MIDI (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The Duration of the MIDI (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the MIDI.
     *
     * @return \DedexBundle\Entity\Ern381\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the MIDI.
     *
     * @param \DedexBundle\Entity\Ern381\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\Ern381\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or more MusicalWorks contained in the MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the MIDI.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceMusicalWorkReferenceList($index)
    {
        return isset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * unset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the MIDI.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceMusicalWorkReferenceList($index)
    {
        unset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * Gets as resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the MIDI.
     *
     * @return \DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the MIDI.
     *
     * @param \DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     * @return self
     */
    public function setResourceMusicalWorkReferenceList(array $resourceMusicalWorkReferenceList = null)
    {
        $this->resourceMusicalWorkReferenceList = $resourceMusicalWorkReferenceList;
        return $this;
    }

    /**
     * Adds as resourceContainedResourceReference
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DedexBundle\Entity\Ern381\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current MIDI.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContainedResourceReferenceList($index)
    {
        return isset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * unset resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current MIDI.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContainedResourceReferenceList($index)
    {
        unset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * Gets as resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current MIDI.
     *
     * @return \DedexBundle\Entity\Ern381\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReferenceList()
    {
        return $this->resourceContainedResourceReferenceList;
    }

    /**
     * Sets a new resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current MIDI.
     *
     * @param \DedexBundle\Entity\Ern381\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     * @return self
     */
    public function setResourceContainedResourceReferenceList(array $resourceContainedResourceReferenceList = null)
    {
        $this->resourceContainedResourceReferenceList = $resourceContainedResourceReferenceList;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the MIDI was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern381\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the MIDI was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern381\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DedexBundle\Entity\Ern381\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the MIDI was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]]. This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @return \DedexBundle\Entity\Ern381\EventDateType
     */
    public function getMasteredDate()
    {
        return $this->masteredDate;
    }

    /**
     * Sets a new masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the MIDI was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]]. This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @param \DedexBundle\Entity\Ern381\EventDateType $masteredDate
     * @return self
     */
    public function setMasteredDate(?\DedexBundle\Entity\Ern381\EventDateType $masteredDate = null)
    {
        $this->masteredDate = $masteredDate;
        return $this;
    }

    /**
     * Gets as remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the MIDI was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]]. This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @return \DedexBundle\Entity\Ern381\EventDateType
     */
    public function getRemasteredDate()
    {
        return $this->remasteredDate;
    }

    /**
     * Sets a new remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the MIDI was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]]. This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @param \DedexBundle\Entity\Ern381\EventDateType $remasteredDate
     * @return self
     */
    public function setRemasteredDate(?\DedexBundle\Entity\Ern381\EventDateType $remasteredDate = null)
    {
        $this->remasteredDate = $remasteredDate;
        return $this;
    }

    /**
     * Adds as midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\MidiDetailsByTerritoryType $midiDetailsByTerritory
     */
    public function addToMidiDetailsByTerritory(\DedexBundle\Entity\Ern381\MidiDetailsByTerritoryType $midiDetailsByTerritory)
    {
        $this->midiDetailsByTerritory[] = $midiDetailsByTerritory;
        return $this;
    }

    /**
     * isset midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMidiDetailsByTerritory($index)
    {
        return isset($this->midiDetailsByTerritory[$index]);
    }

    /**
     * unset midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMidiDetailsByTerritory($index)
    {
        unset($this->midiDetailsByTerritory[$index]);
    }

    /**
     * Gets as midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @return \DedexBundle\Entity\Ern381\MidiDetailsByTerritoryType[]
     */
    public function getMidiDetailsByTerritory()
    {
        return $this->midiDetailsByTerritory;
    }

    /**
     * Sets a new midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @param \DedexBundle\Entity\Ern381\MidiDetailsByTerritoryType[] $midiDetailsByTerritory
     * @return self
     */
    public function setMidiDetailsByTerritory(array $midiDetailsByTerritory)
    {
        $this->midiDetailsByTerritory = $midiDetailsByTerritory;
        return $this;
    }
}

