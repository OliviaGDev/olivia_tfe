<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Estimate;
use App\Module;
use App\Client;
use App\Country;
use App\Category;
use \PDF;

class EstimateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estimates = DB::table('estimates')
            ->join('categories', 'estimates.categorie_id', '=', 'categories.id')
            ->join('clients', 'estimates.client_id', '=', 'clients.id')
            ->select('estimates.id as idEstimate','estimates.*', 'categories.*', 'clients.*')
            ->orderBy('estimates.id','desc')
            ->paginate(10);
        return View::make('estimates.index', [
        'estimates' => $estimates
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Estimate $estimate)
    {

        $modules = Module::orderBy('id','desc')->get();
        $categories = Category::all();
        $clients = Client::all();

        return View::make('estimates.create',
        [
          'modules' => $modules,
          'categories'=> $categories,
          'clients' => $clients,
          'estimate'=>$estimate
        ]
      );
    }


    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request){

      $estimate = new Estimate;
      $estimate->summerize = $request->summerize;
      $estimate->proposition = $request->proposition;
      $estimate->categorie_id = $request->categorie_id;
      $estimate->client_id = $request->client_id;
      $estimate->composition = $request->estimates_items;
      $estimate->save();

      return redirect('/estimates');
    }

    public function edit($id){
      $estimate = Estimate::find($id);
      $categories = Category::all();
      $composition = json_decode($estimate->composition);
        return View::make('estimates.edit', ['estimate' => $estimate, 'categories'=>$categories, 'composition'=> $composition ]);

    }

    public function estimateDownloadPDF($id){

      $estimate = Estimate::find($id);
      $categories = [];
      $categoriesDb = Category::all();
      $client = Client::find($estimate->client_id);

      foreach ($categoriesDb as $category) {
        $categories[$category['id']] = $category['name'];
      }

      $clientData = [
        'id' => $client->id,
        'logo' => public_path() . '/logo/' . $client->logo,
        'country' => Country::find($client->country_id)->country_name,
        'company' => $client->company,
      ];

      unset($client);
      $composition = json_decode($estimate->composition);
      $pdf = \PDF::loadView('estimates/pdf', ['estimate' => $estimate,'composition' => $composition, 'categories'=>$categories,'client' => $clientData])->save('pdf/estimates/devis '.$id.'.pdf');

      return $pdf->download('DEVIS'.date('Y').''.$id.'.pdf');

    }

    /**
     * [estimateStreamPDF description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function estimateStreamPDF($id){

      $estimate = Estimate::find($id);
      $categories = [];
      $categoriesDb = Category::all();
      $client = Client::find($estimate->client_id);

      foreach ($categoriesDb as $category) {
        $categories[$category['id']] = $category['name'];
      }

      $clientData = [
        'id' => $client->id,
        'logo' => public_path() . '/logo/' . $client->logo,
        'country' => Country::find($client->country_id)->country_name,
        'company' => $client->company,
      ];

      unset($client);

      $composition = json_decode($estimate->composition);
      $pdf = \PDF::loadView('estimates/pdf', ['estimate' => $estimate, 'composition'=>$composition, 'categories'=>$categories, 'client' => $clientData])->save('pdf/estimates/devis '.$id.'.pdf');

      return $pdf->stream('DEVIS'.date('Y').''.$id.'pdf');

    }

}
