<?php
if (! function_exists('paginater'))
{
	function paginater($table, $list_total_item, $perpage, $offset)
	{
		$linkcount = ceil($list_total_item / $perpage);
		$cnt = 0;
		$isActive = false;
		$active = 0;
		echo '<nav aria-label="...">';
		  echo '<ul class="pagination justify-content-end">';

		    if($offset > 0)
		    {
			    echo '<li class="page-item">';
			      	echo '<a class="page-link" href="'.base_url().''.$table.'/'.($offset - $perpage).'">Previous</a>';
		    	echo '</li>';
		    }
		    else
		    {
			    echo '<li class="page-item disabled">';
			      	echo '<a class="page-link" href="'.base_url().''.$table.'/'.$offset.'">Previous</a>';
		    	echo '</li>';
		    }

		    while($cnt < $linkcount)
		    {
		    	$isActive = ($offset / $perpage) == $cnt ? true : false;
		    	if($isActive)
		    	{
		    		$active = $cnt;
		    	}
		    	$cnt++;
		    	echo '<li class="page-item '. ($isActive == true ? "active":"").'"><a class="page-link" href="'.base_url().''.$table.'/'.(($cnt-1)*$perpage).'">'.$cnt.'</a></li>';
		    }

		    if($active == ($linkcount -1))
		    {
			    echo '<li class="page-item disabled">';
			      	echo '<a class="page-link" href="'.base_url().''.$table.'/'.$offset.'">Next</a>';
		    	echo '</li>';
		    }
		    else
		    {
			    echo '<li class="page-item">';
		    		echo '<a class="page-link" href="'.base_url().''.$table.'/'.(($active+1)*$perpage).'">Next</a>';
		    	echo '</li>';
		    }
		  echo '</ul>';
		echo '</nav>';
	}
}
