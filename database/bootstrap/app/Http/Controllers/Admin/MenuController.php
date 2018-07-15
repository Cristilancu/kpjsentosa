<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\NavbarMenu;

class MenuController extends Controller {

	public function getCategoriesList()
	{
		$menu_items = NavbarMenu::orderBy('position')
								->where('parent_id',0)
								->with('children')
								->get();
		$menu_items->map(function($cat) {
		    $cat->category_name = str_replace(  '<br/>', "\n", $cat->category_name );
		    return $cat;
        });

		// return $menu_items;								
		return view('admin.navbar_menus.categories_list', compact('menu_items'));
	}

	public function postChangeCategoriesListPosition(Request $request)
	{
		
		$positions = json_decode($request->get('positions'));

		$i=0;
		foreach($positions as $position){
			$menu_item = NavbarMenu::find($position->id);
			$menu_item->position = ++$i;
			$menu_item->parent_id = 0;
			$menu_item->save();

			if(isset($position->children) && count($position->children) > 0){
				$children = $position->children;
				foreach($children as $child){
					$child_item = NavbarMenu::find($child->id);
					$child_item->position = ++$i;
					$child_item->parent_id = $position->id;
					$child_item->save();
				}
			}
		}
		return 1;
	}

	public function postSaveCategoriesListChange(Request $request)
	{
		// $validator = Validator::make($request->all(), [
		// 	'menu_category_name' => 'required',
		// 	'menu_status' => 'required|min:0|max:1',
		// 	'menu_item_id' => 'required|exists:navbar_menus,id'
		// ]);

		// if ($validator->fails())
		// {
		//     return [
		//     	'status' => 0,
		//     	'message' => $validator->errors()->first()
		//     ];
		// }

		$menu_item = NavbarMenu::find($request->menu_item_id);
		$menu_item->status = $request->menu_status;
		$menu_item->category_name = str_replace( "\n", '<br/>', $request->menu_category_name );
		$menu_item->save();

		return [
			'status' => 1,
			'message' => 'OK'
		];
	}

	public function deleteCategoryListItem(Request $request)
	{
		$menu_item = NavbarMenu::find($request->menu_item_id);
		$result = [
			'status' => 1,
			'message' => 'Success deleting ' . str_replace('<br/>', '', $menu_item->category_name)
		];

		$menu_item->delete();
		return $result;
	}

	public function postCategoryListItemDuplicate(Request $request)
	{
		$menu_item = NavbarMenu::find($request->menu_item_id);
		$new_item = new NavbarMenu;
		$new_item->position = $menu_item->position + 1;
		$new_item->category_name = $menu_item->category_name . ' (2)';
		$new_item->url = $menu_item->url;
		$new_item->css_class = $menu_item->css_class;
		$new_item->status = 0;
		$new_item->created_at = date('Y-m-d H:i:s');
		$new_item->updated_at = date('Y-m-d H:i:s');
		$new_item->save();

		return [
			'status' => 1,
			'message' => 'Success making duplicate of ' . $menu_item->category_name
		];
	}
}
