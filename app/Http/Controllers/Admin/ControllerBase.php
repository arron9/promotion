<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Categories;

class ControllerBase extends Controller
{
    public function __construct(Request $request) {
        $module = 'home';
        $request->session()->forget('top_categories');

        $categories = Categories::all()->toArray();
        $topCategory = [];
        $sideCategory = [];
        array_walk($categories, function($category) use(&$topCategory, &$sideCategory) {
            if ( $category['pid'] === '0' ) {
                $topCategory[] = $category;
            } 
        });

        $categoryId = 1;
        $sideCategories = $this->recursion($categories, 1);

        session(['top_categories' => json_encode($topCategory)]);
        session(['side_categories' => json_encode($sideCategories)]);
    }

    private function recursion($elements, $parentId) {
        $tree = [];
        foreach($elements as $element) {
            if($element['pid'] == $parentId) {
                $children = $this->recursion($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }

                $tree[] = $element;
                unset($elements[$element['id']]);
            }
        }

        return $tree;
    }

}
