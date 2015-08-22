<?php
/**
 * CodeIgniter Alert Helpers For Alert Library
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Twitter: @d_nizh / Facebook: /dna1993
 * @link		https://github.com/dnizh
 */
 
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('has_alert'))
{
	function has_alert($type = '')
	{
		$CI =& get_instance();
		$alerts = $CI->alert->has_alert($type);
		
		if(!empty($alerts)){
			return $alerts;
		}
		
		return false;
	}
}
