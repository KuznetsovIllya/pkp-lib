<?php

/**
 * @file classes/submission/Genre.inc.php
 *
 * Copyright (c) 2014-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Genre
 * @ingroup submission
 * @see GenreDAO
 *
 * @brief Basic class describing a genre.
 */

define('GENRE_CATEGORY_DOCUMENT', 1);
define('GENRE_CATEGORY_ARTWORK', 2);

define('GENRE_SORTABLE_DESIGNATION', '##');

class Genre extends DataObject {
	/**
	 * Constructor
	 */
	function Genre() {
		parent::DataObject();
	}

	/**
	 * Get ID of context.
	 * @return int
	 */
	function getContextId() {
		return $this->getData('contextId');
	}

	/**
	 * Set ID of context.
	 * @param $contextId int
	 */
	function setContextId($contextId) {
		return $this->setData('contextId', $contextId);
	}

	/**
	 * Get sequence of genre.
	 * @return float
	 */
	function getSequence() {
		return $this->getData('sequence');
	}

	/**
	 * Set sequence of genre.
	 * @param $sequence float
	 */
	function setSequence($sequence) {
		return $this->setData('sequence', $sequence);
	}

	/**
	 * Get key of genre.
	 * @return string
	 */
	function getKey() {
		return $this->getData('key');
	}

	/**
	 * Set key of genre.
	 * @param $key string
	 */
	function setKey($key) {
		return $this->setData('key', $key);
	}

	/**
	 * Get enabled status of genre.
	 * @return boolean
	 */
	function getEnabled() {
		return $this->getData('enabled');
	}

	/**
	 * Set enabled status of genre.
	 * @param $enabled boolean
	 */
	function setEnabled($enabled) {
		return $this->setData('enabled', $enabled);
	}

	/**
	 * Set the name of the genre
	 * @param $name string
	 * @param $locale string
	 */
	function setName($name, $locale) {
		$this->setData('name', $name, $locale);
	}

	/**
	 * Get the name of the genre
	 * @param $locale string
	 * @return string
	 */
	function getName($locale) {
		return $this->getData('name', $locale);
	}

	/**
	 * Get the localized name of the genre
	 * @return string
	 */
	function getLocalizedName() {
		return $this->getLocalizedData('name');
	}

	/**
	 * Set the designation of the genre
	 * @param $abbrev string
	 */
	function setDesignation($abbrev) {
		$this->setData('designation', $abbrev);
	}

	/**
	 * Get the designation of the genre
	 * @return string
	 */
	function getDesignation() {
		return $this->getData('designation');
	}

	/**
	 * Get sortable flag of the context type
	 * @return bool
	 */
	function getSortable() {
		return $this->getData('sortable');
	}

	/**
	 * Set sortable flag of the context type
	 * @param $sortable bool
	 */
	function setSortable($sortable) {
		return $this->setData('sortable', $sortable);
	}

	/**
	 * Get context file category (e.g. artwork or document)
	 * @return int GENRE_CATEGORY_...
	 */
	function getCategory() {
		return $this->getData('category');
	}

	/**
	 * Set context file category (e.g. artwork or document)
	 * @param $category int GENRE_CATEGORY_...
	 */
	function setCategory($category) {
		return $this->setData('category', $category);
	}

	/**
	 * Get dependent flag
	 * @return bool
	 */
	function getDependent() {
		return $this->getData('dependent');
	}

	/**
	 * Set dependent flag
	 * @param $dependent bool
	 */
	function setDependent($dependent) {
		return $this->setData('dependent', $dependent);
	}
}

?>
