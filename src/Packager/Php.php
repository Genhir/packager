<?php

include_once(__DIR__.'/Php/Completer.php');

class Packager_Php extends Packager_Php_Completer
{	
	const FS_MODE_PRESERVE_HDD = 'PHP_PRESERVE_HDD';
	const FS_MODE_PRESERVE_PACKAGE = 'PHP_PRESERVE_PACKAGE';
	const FS_MODE_STRICT_HDD = 'PHP_STRICT_HDD';
	const FS_MODE_STRICT_PACKAGE = 'PHP_STRICT_PACKAGE';

	/**
	 * Create singleton instance with configuration
	 * 
	 * @param array $cfg 
	 * 
	 * @return Packager_Php
	 */
	public static function Create ($cfg = array()) {
		return parent::Create($cfg);
	}
	/**
	 * Get instance and merge configuration or create singleton instance with configuration
	 * 
	 * @param array $cfg 
	 * 
	 * @return Packager_Php
	 */
	public static function Get ($cfg = array()) {
		return parent::Get($cfg);
	}
	/**
	 * Set application sources directory
	 * 
	 * @param string $fullOrRelativePath
	 * 
	 * @return Packager_Php
	 */
	public function SetSourceDir ($fullOrRelativePath = '') {
		return parent::SetSourceDir($fullOrRelativePath);
	}
	/**
	 * Set compilation result file, if exist, it will be overwriten
	 * 
	 * @param string $releaseFileFullPath 
	 * 
	 * @return Packager_Php
	 */
	public function SetReleaseFile ($releaseFileFullPath = '') {
		return parent::SetReleaseFile($releaseFileFullPath);
	}
	/**
	 * Set preg_replace() patterns array or single string about
	 * which files or folders will be excluded from result file.
	 * Function replace all previous configuration records.
	 * 
	 * @param array|string $excludePatterns 
	 * 
	 * @return Packager_Php
	 */
	public function SetExcludePatterns ($excludePatterns = array()) {
		return parent::SetExcludePatterns($excludePatterns);
	}
	/**
	 * Add preg_replace() patterns array or single string about
	 * which files or folders will be excluded from result file.
	 * 
	 * @param array|string $excludePatterns 
	 * 
	 * @return Packager_Php
	 */
	public function AddExcludePatterns ($excludePatterns = array()) {
		return parent::AddExcludePatterns($excludePatterns);
	}
	/**
	 * Set patterns/replacements array about what will be replaced
	 * in *.php and *.phtml files by preg_replace(pattern, replacement, source)
	 * before possible minification process.
	 * Function replace all previous configuration records.
	 * 
	 * @param array $patternReplacements 
	 * 
	 * @return Packager_Php
	 */
	public function SetPatternReplacements ($patternReplacements = array()) {
		return parent::SetPatternReplacements($patternReplacements);
	}
	/**
	 * Add patterns/replacements array about what will be replaced
	 * in *.php and *.phtml files by preg_replace(pattern, replacement, source)
	 * before possible minification process.
	 * 
	 * @param array $patternReplacements 
	 * 
	 * @return Packager_Php
	 */
	public function AddPatternReplacements ($patternReplacements = array()) {
		return parent::AddPatternReplacements($patternReplacements);
	}
	/**
	 * Set str_replace() key/value array about
	 * what will be simply replaced in result file.
	 * Function replace all previous configuration records.
	 * 
	 * @param array $stringReplacements 
	 * 
	 * @return Packager_Php
	 */
	public function SetStringReplacements ($stringReplacements = array()) {
		return parent::SetStringReplacements($stringReplacements);
	}
	/**
	 * Add str_replace() key/value array about
	 * what will be simply replaced in result file.
	 * 
	 * @param array $stringReplacements 
	 * 
	 * @return Packager_Php
	 */
	public function AddStringReplacements ($stringReplacements = array()) {
		return parent::AddStringReplacements($stringReplacements);
	}
	/**
	 * Set list of relative PHP file path(s) from application document root
	 * to include in result file as first, after everything will be included 
	 * by automatic order determination. List will be prepended or appended
	 * before or after existing list by second param
	 * Function replace all previous configuration records.
	 * 
	 * @param array|string $includeFirst
	 * 
	 * @return Packager_Php
	 */
	public function SetIncludeFirst ($includeFirst = array()) {
		return parent::SetIncludeFirst($includeFirst);
	}
	/**
	 * Add list of relative PHP file path(s) from application document root
	 * to include in result file as first, after everything will be included 
	 * by automatic order determination. List will be prepended or appended
	 * before or after existing list by second param.
	 * 
	 * @param array|string $includeFirst
	 * @param string       $mode         'append' or 'prepend'
	 * 
	 * @return Packager_Php
	 */
	public function AddIncludeFirst ($includeFirst = array(), $mode = 'append') {
		return parent::AddIncludeFirst($includeFirst, $mode);
	}
	
	/**
	 * Set list of relative PHP file path(s) from application document root
	 * to include in result file as last, after everything will be included 
	 * by automatic order determination. List will be prepended or appended
	 * before or after existing list by second param
	 * Function replace all previous configuration records.
	 * 
	 * @param array|string $includeLast
	 * 
	 * @return Packager_Php
	 */
	public function SetIncludeLast ($includeLast = array()) {
		return parent::SetIncludeLast($includeLast);
	}
	/**
	 * Add list of relative PHP file path(s) from application document root
	 * to include in result file as last, after everything will be included 
	 * by automatic order determination. List will be prepended or appended
	 * before or after existing list by second param.
	 * By default, there is initialized by default "index.php" file to include 
	 * as last, see Packager_Php::SetIncludeLastDefault() to overwrite it
	 * or use (new Packager_Php)->SetIncludeLast() to overwrite it.
	 * 
	 * @param array|string $includeLast
	 * @param string       $mode         'append' or 'prepend'
	 * 
	 * @return Packager_Php
	 */
	public function AddIncludeLast ($includeLast = array(), $mode = 'append') {
		return parent::AddIncludeLast($includeLast, $mode);
	}
	/**
	 * Set boolean if *.phtml templates will be minimized before saving into result file
	 * 
	 * @param string $minifyTemplates
	 * 
	 * @return Packager_Php
	 */
	public function SetMinifyTemplates ($minifyTemplates = TRUE) {
		return parent::SetMinifyTemplates($minifyTemplates);
	}
	/**
	 * Set boolean if *.php scripts will be minimized before saving into result file
	 * 
	 * @param string $minifyPhp
	 * 
	 * @return Packager_Php
	 */
	public function SetMinifyPhp ($minifyPhp = TRUE) {
		return parent::SetMinifyPhp($minifyPhp);
	}
	/**
	 * Set mode for wrapper class how to behave when any replaced file system php 
	 * function will be called - it here will be searching in memory and after in hdd 
	 * or hdd first and then memory or no memory or no hdd.
	 * 
	 * @param string $fsMode 
	 */
	public function SetPhpFileSystemMode ($fsMode = self::FS_MODE_PRESERVE_HDD) {
		return parent::SetPhpFileSystemMode($fsMode);
	}
	/**
	 * Define all php functions you want to replace with internal php file calls as strings,
	 * named functions will not be used in original way to read/write anything from hard drive,
	 * all specified functions will be replaced with wrapper calls to give results from memory variables.
	 * It's possible to name 'include' and 'require', but all 'include_once' and 'require_once' 
	 * are replaced automaticly if there is safely detected line content - string only, no variables inside
	 * 
	 * @param string $phpFuncStr,...
	 */
	public function ReplacePhpFunctions () {
		return parent::ReplacePhpFunctions(func_get_args());
	}
	/**
	 * Define all php functions you don't want to replace with internal php file calls as strings,
	 * named functions will be used in original way to read/write anything from hard drive.
	 * It's possible to name 'include' and 'require', but all 'include_once' and 'require_once' 
	 * are replaced automaticly if there is safely detected line content - string only, no variables inside
	 * 
	 * @param string $phpFuncStr 
	 */
	public function KeepPhpFunctions () {
		return parent::KeepPhpFunctions(func_get_args());
	}
	/**
	 * Merge multilevel configuration array with previously initialized values.
	 * New values sended into this function will be used preferred.
	 * 
	 * @param array $cfg
	 * 
	 * @return Packager_Php
	 */
	public function MergeConfiguration ($cfg = array()) {
		return parent::MergeConfiguration($cfg);
	}
	/**
	 * Run PHP compilation process, print output to CLI or browser
	 * 
	 * @param array $cfg 
	 * 
	 * @return Packager_Php
	 */
	public function Run ($cfg = array()) {
		parent::Run($cfg);
		list($jobMethod, $params) = $this->completeJobAndParams();
		$this->$jobMethod($params);
	}
}