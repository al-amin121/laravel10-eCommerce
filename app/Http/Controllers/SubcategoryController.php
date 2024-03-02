<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use Auth;

class SubcategoryController extends Controller
{
    public function subcategoryList(){
        $data['getRecord'] = SubCategoryModel::getRecord();
        $data['header_title'] = "Sub Category";
        return view('admin.subcategory.subcategory-list', $data);
    }

    public function add(){
        $data['header_title'] = "Add Sub Category";
        return view('admin.subcategory.subcategory-add', $data);
    }
}
