	<?php 
	function floor_and_ceiling_button(value,indicator)
	{
		if (indicator=='floor')
		{
			return floor(value);
		} 
		else
		{
			return ceil(value);
		}
	}
	?>