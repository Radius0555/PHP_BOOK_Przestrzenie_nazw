<?php
namespace zwierze\dzikie
{
	class zwierze
	{
		static function gdziejestem()
		{
			print __NAMESPACE__."</br>";
		}
		function __construct()
		{
			$this->type="tygrys";
		}
		function get_typ()
		{
			return($this->type);
		}
	}
}

namespace zwierze\domowe
{
	class zwierze
	{
		function __construct()
		{
			$this->type='pies';
		}
		function get_typ()
		{
			return($this->type);
		}
	}
}	
?>