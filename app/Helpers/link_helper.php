<?php
if (! function_exists('hasPrimary'))
{
	function hasPrimary($module_id, array $array_permissions)
	{
		foreach($array_permissions as $permission)
		{
			if($permission['module_id'] == $module_id && $permission['func_type'] == 1 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
			{
				return true;
			}
		}

		return false;
	}
}

if (! function_exists('user_primary_links'))
{
	function user_primary_links(array $array_permissions)
	{
		foreach($_SESSION['appmodules'] as $module)
		{
			if(hasPrimary($module['id'], $array_permissions))
			{
				echo '<li class="nav-item active">';
				echo '<div class="dropdown primary-menu-top">';
				echo '<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="'.str_replace(' ', '', ucwords(name_on_system($module['id'], $_SESSION['appmodules'], 'modules'))).'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
				echo getIcon($module['id'], $_SESSION['appmodules'], false).' '. ucwords(name_on_system($module['id'], $_SESSION['appmodules'], 'modules'));
				echo '</button>';
				echo '<div class="dropdown-menu drop-items-primary" aria-labelledby="'.str_replace(' ', '', ucwords(name_on_system($module['id'], $_SESSION['appmodules'], 'modules'))).'">';
				foreach($array_permissions as $permission)
				{
					if($permission['module_id'] == $module['id'] && $permission['func_type'] == 1 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
					{
						if($permission['slugs'] == 'user-own-profile')
						{
							echo '<a class="dropdown-item" title="'.ucwords($permission['function_name']) .'" data-toggle="tooltip" data-placement="bottom" class="nav-link" href="'. base_url() .''.str_replace("_","-",$permission['table_name']).'/own/'.$_SESSION['uid'] .'">'.getIcon($permission['id'], $_SESSION['userPermmissions']).' '.ucwords($permission['function_name']) .' </a>';
						}
						else
						{
							echo '<a class="dropdown-item" title="'.ucwords($permission['function_name']) .'" data-toggle="tooltip" data-placement="bottom" class="nav-link" href="'. base_url() .''.str_replace("_","-",$permission['table_name']).'">'.getIcon($permission['id'], $_SESSION['userPermmissions']).' '.ucwords($permission['function_name']) .' </a>';
						}
					}
				}
				echo '</div>';
				echo '</div>';
				echo '</li>';
			}
		}
	}
}

if (! function_exists('user_add_link'))
{
	function user_add_link(string $table, array $array_permissions)
	{
		foreach($array_permissions as $permission)
		{
			if($permission['table_name'] == $table && $permission['func_type'] == 3 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
			{
				echo  '<a href="'. base_url() .''.str_replace("_","-",$table).'/add" class="btn btn-sm btn-primary btn-block float-right">Add '.ucwords(str_replace('_', ' ', $table)) .'</a>';
				break;
			}
		}

	}
}

if (! function_exists('user_edit_link'))
{
	function user_edit_link(string $table, string $slugs, array $array_permissions, $id)
	{
		foreach($array_permissions as $permission)
		{
			if($permission['slugs'] == $slugs && $permission['func_type'] == 3 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
			{
				echo  '<a href="'. base_url() .''.str_replace("_","-",$table).'/edit/'.$id.'" class="btn btn-sm btn-warning btn-block"><i class="far fa-edit"></i> Edit</a>';
				break;
			}
		}

	}
}

if (! function_exists('users_action'))
{
	function users_action(string $table, array $array_permissions, $id)
	{

		foreach($array_permissions as $permission)
		{
			if($permission['table_name'] == $table && $permission['func_type'] == 3 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
			{
				switch($permission['func_action'])
				{
					case 'show':
						echo '<a class="btn btn-info btn-sm" title="show" href="'. base_url() .''.str_replace("_","-",$table).'/'.$permission['func_action'].'/'. $id.'"><i class="fas fa-bars"></i></a> ';
						break;
					case 'edit':
						echo '<a class="btn btn-warning btn-sm" title="show" href="'. base_url() .''.str_replace("_","-",$table).'/'.$permission['func_action'].'/'. $id.'"><i class="far fa-edit"></i></a> ';
						break;
					case 'delete':
						echo  '<a class="btn btn-danger btn-sm remove" onClick="confirmDelete(\''.base_url().''.str_replace("_","-",$table).'/delete/\','.$id.')" title="delete"><i class="far fa-trash-alt"></i></a>';
						break;
				}
			}
		}
	}
}

if (! function_exists('user_link'))
{
	function user_link(string $slugs, array $array_permissions)
	{
		$isValidSlug = 0;

		if(!empty($array_permissions))
		{
			foreach($array_permissions as $permission)
			{
				if(in_array($slugs, $permission))
				{
					return 1;
				}
			}

			if($isValidSlug == 0)
			{
				return 0;
			}

		}
	}
}
