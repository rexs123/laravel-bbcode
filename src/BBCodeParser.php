<?php

namespace PheRum\BBCode;

use PheRum\BBCode\Traits\ArrayTrait;

class BBCodeParser
{
	use ArrayTrait;

	/**
	 * @var array
	 */
	protected $parsers = [
		'center' => [
			'pattern' => '/\[center\](.*?)\[\/center\]/s',
			'replace' => '<div class="text-center">$1</div>',
			'content' => '$1'
		],
		'right' => [
			'pattern' => '/\[right\](.*?)\[\/right\]/s',
			'replace' => '<div class="text-right">$1</div>',
			'content' => '$1'
		],
		'left' => [
			'pattern' => '/\[left\](.*?)\[\/left\]/s',
			'replace' => '<div class="text-left">$1</div>',
			'content' => '$1'
		],
		'color' => [
			'pattern' => '/\[color=([#a-z0-9]+)\](.*?)\[\/color\]/s',
			'replace' => '<span style="color:$1">$2</span>',
			'content' => '$2'
		],
		'h1' => [
			'pattern' => '/\[h1\](.*?)\[\/h1\]/s',
			'replace' => '<h1>$1</h1>',
			'content' => '$1'
		],
		'h2' => [
			'pattern' => '/\[h2\](.*?)\[\/h2\]/s',
			'replace' => '<h2>$1</h2>',
			'content' => '$1'
		],
		'h3' => [
			'pattern' => '/\[h3\](.*?)\[\/h3\]/s',
			'replace' => '<h3>$1</h3>',
			'content' => '$1'
		],
		'h4' => [
			'pattern' => '/\[h4\](.*?)\[\/h4\]/s',
			'replace' => '<h4>$1</h4>',
			'content' => '$1'
		],
		'h5' => [
			'pattern' => '/\[h5\](.*?)\[\/h5\]/s',
			'replace' => '<h5>$1</h5>',
			'content' => '$1'
		],
		'h6' => [
			'pattern' => '/\[h6\](.*?)\[\/h6\]/s',
			'replace' => '<h6>$1</h6>',
			'content' => '$1'
		],
		'bold' => [
			'pattern' => '/\[b\](.*?)\[\/b\]/s',
			'replace' => '<b>$1</b>',
			'content' => '$1'
		],
		'italic' => [
			'pattern' => '/\[i\](.*?)\[\/i\]/s',
			'replace' => '<i>$1</i>',
			'content' => '$1'
		],
		'underline' => [
			'pattern' => '/\[u\](.*?)\[\/u\]/s',
			'replace' => '<u>$1</u>',
			'content' => '$1'
		],
		'strikethrough' => [
			'pattern' => '/\[s\](.*?)\[\/s\]/s',
			'replace' => '<s>$1</s>',
			'content' => '$1'
		],
		'quote' => [
			'pattern' => '/\[quote\](.*?)\[\/quote\]/s',
			'replace' => '<blockquote>$1</blockquote>',
			'content' => '$1'
		],
		'link' => [
			'pattern' => '/\[url\](.*?)\[\/url\]/s',
			'replace' => '<a href="$1">$1</a>',
			'content' => '$1'
		],
		'namedlink' => [
			'pattern' => '/\[url\=(.*?)\](.*?)\[\/url\]/s',
			'replace' => '<a href="$1">$2</a>',
			'content' => '$2'
		],
		'image' => [
			'pattern' => '/\[img\](.*?)\[\/img\]/s',
			'replace' => '<img src="//images.weserv.nl/?url=$1">',
			'content' => '$1'
		],
		'orderedlistnumerical' => [
			'pattern' => '/\[list=1\](.*?)\[\/list\]/s',
			'replace' => '<ol>$1</ol>',
			'content' => '$1'
		],
		'orderedlistalpha' => [
			'pattern' => '/\[list=a\](.*?)\[\/list\]/s',
			'replace' => '<ol type="a">$1</ol>',
			'content' => '$1'
		],
		'unorderedlist' => [
			'pattern' => '/\[list\](.*?)\[\/list\]/s',
			'replace' => '<ul>$1</ul>',
			'content' => '$1'
		],
		'ulorderedlist' => [
			'pattern' => '/\[ul\](.*?)\[\/ul\]/s',
			'replace' => '<ul>$1</ul>',
			'content' => '$1'
		],
		'listitem' => [
			'pattern' => '/\[li\](.*?)\[\/li\]/s',
			'replace' => '<li>$1</li>',
			'content' => '$1'
		],
		'code' => [
			'pattern' => '/\[code\](.*?)\[\/code\]/s',
			'replace' => '<code>$1</code>',
			'content' => '$1'
		],
		'youtube' => [
			'pattern' => '/\[youtube\](.*?)\[\/youtube\]/s',
			'replace' => '<iframe width="560" height="315" src="//www.youtube-nocookie.com/embed/$1" frameborder="0" allowfullscreen></iframe>',
			'content' => '$1'
		],
		'sub' => [
			'pattern' => '/\[sub\](.*?)\[\/sub\]/s',
			'replace' => '<sub>$1</sub>',
			'content' => '$1'
		],
		'sup' => [
			'pattern' => '/\[sup\](.*?)\[\/sup\]/s',
			'replace' => '<sup>$1</sup>',
			'content' => '$1'
		],
		'small' => [
			'pattern' => '/\[small\](.*?)\[\/small\]/s',
			'replace' => '<small>$1</small>',
			'content' => '$1'
		],
		'table' => [
			'pattern' => '/\[table\](.*?)\[\/table\]/s',
			'replace' => '<table>$1</table>',
			'content' => '$1',
		],
		'table-row' => [
			'pattern' => '/\[tr\](.*?)\[\/tr\]/s',
			'replace' => '<tr>$1</tr>',
			'content' => '$1',
		],
		'table-data' => [
			'pattern' => '/\[td\](.*?)\[\/td\]/s',
			'replace' => '<td>$1</td>',
			'content' => '$1',
		],

		'emote' => [
			'pattern' => '/\[:(.*?)\:]/s',
			'replace' => '<img src="//songoda.sfo2.cdn.digitaloceanspaces.com/emotes/$1.png" class="emote" data-toggle="tooltip" data-placement="top" title="$1" >',
			'content' => '$1',
		],
	];

	/**
	 * @var array
	 */
	protected $enabledParsers;

	public function __construct()
	{
		$this->enabledParsers = $this->parsers;
	}

	/**
	 * Parses the BBCode string
	 *
	 * @param      $source
	 * @param bool $caseInsensitive
	 * @return string
	 */
	public function parse($source, $caseInsensitive = false)
	{
		foreach ($this->enabledParsers as $name => $parser) {
			$pattern = ($caseInsensitive) ? $parser['pattern'] . 'i' : $parser['pattern'];

			$source = $this->searchAndReplace($pattern, $parser['replace'], $source);
		}

		return $source;
	}

	/**
	 * Remove all BBCode
	 *
	 * @param  string $source
	 * @return string Parsed text
	 */
	public function stripBBCodeTags($source)
	{
		foreach ($this->parsers as $name => $parser) {
			$source = $this->searchAndReplace($parser['pattern'] . 'i', $parser['content'], $source);
		}

		return $source;
	}

	/**
	 * Searches after a specified pattern and replaces it with provided structure
	 *
	 * @param  string $pattern Search pattern
	 * @param  string $replace Replacement structure
	 * @param  string $source  Text to search in
	 * @return string Parsed text
	 */
	protected function searchAndReplace($pattern, $replace, $source)
	{
		while (preg_match_all($pattern, $source)) {
			$source = preg_replace($pattern, $replace, $source);
		}

		return $source;
	}

	/**
	 * Helper function to parse case sensitive
	 *
	 * @param  string $source String containing the BBCode
	 * @return string Parsed text
	 */
	public function parseCaseSensitive($source)
	{
		return $this->parse($source, false);
	}

	/**
	 * Helper function to parse case insensitive
	 *
	 * @param  string $source String containing the BBCode
	 * @return string Parsed text
	 */
	public function parseCaseInsensitive($source)
	{
		return $this->parse($source, true);
	}

	/**
	 * Limits the parsers to only those you specify
	 *
	 * @param  mixed $only parsers
	 * @return object BBCodeParser object
	 */
	public function only($only = null)
	{
		$only                 = (is_array($only)) ? $only : func_get_args();
		$this->enabledParsers = $this->arrayOnly($this->parsers, $only);

		return $this;
	}

	/**
	 * Removes the parsers you want to exclude
	 *
	 * @param  mixed $except parsers
	 * @return object BBCodeParser object
	 */
	public function except($except = null)
	{
		$except               = (is_array($except)) ? $except : func_get_args();
		$this->enabledParsers = $this->arrayExcept($this->parsers, $except);

		return $this;
	}

	/**
	 * List of chosen parsers
	 *
	 * @return array array of parsers
	 */
	public function getParsers()
	{
		return $this->enabledParsers;
	}

	/**
	 * Sets the parser pattern and replace.
	 * This can be used for new parsers or overwriting existing ones.
	 *
	 * @param string $name    Parser name
	 * @param string $pattern Pattern
	 * @param string $replace Replace pattern
	 * @param string $content Parsed text pattern
	 * @return void
	 */
	public function setParser($name, $pattern, $replace, $content)
	{
		$this->parsers[$name] = [
			'pattern' => $pattern,
			'replace' => $replace,
			'content' => $content,
		];

		$this->enabledParsers[$name] = [
			'pattern' => $pattern,
			'replace' => $replace,
			'content' => $content,
		];
	}
}
