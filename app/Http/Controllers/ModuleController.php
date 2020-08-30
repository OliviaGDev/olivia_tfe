<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Module;
use App\Category;
use \PDF;
use Response;

class ModuleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::orderBy('id','desc')->get();
        $categories = Category::all();
        return View::make('modules.index', [
        'modules' => $modules,
        'categories' => $categories
      ]);
    }

    public function show($id)
    {

      $module = Module::find($id);
      return View::make('modules.show', ['module' => $module ]);

    }

    public function moduleInsert(){
      $module = new Module;
      $module->title = 'Mon module';
      $module->price = 200;
      $module->description = 'Description';
      $module->save();

      return Response()->json(['id' => $module->id],200);

    }

    public function ajaxAdded(Request $request, $id) {
      $data = array();
      $data['title'] = $request['title'];
      $data['price'] = $request['price'];
      $data['description'] = $request['description'];
      $data['category_id'] = $request['category_id'];
      $module = Module::where('id', $id)->update($data);


      return Response()->json($module, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $module = Module::where('id',$id)->delete();
      return Response()->json();
    }

}
