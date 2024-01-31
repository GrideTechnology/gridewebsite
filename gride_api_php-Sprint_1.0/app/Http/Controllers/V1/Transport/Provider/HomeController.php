<?php

namespace App\Http\Controllers\V1\Transport\Provider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transport\RideType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Traits\Actions;
use App\Helpers\Helper;
use Carbon\Carbon;
use Auth;
use DB;

class HomeController extends Controller
{

    public function ridetype(Request $request)
	{
	try{
		$ridetype=RideType::with('providerservice','servicelist')->where('company_id',Auth::guard('provider')->user()->company_id)->where(['status' => 1, 'is_deleted' => 0])->get();
		if(!empty($ridetype)) {
			foreach($ridetype as $ride) {
				if(!empty($ride['providerservice'])) {
					if($ride['providerservice']['admin_service'] == 'TRANSPORT') {
						$provider_vehicles = \App\Models\Common\ProviderVehicle::select('vehicle_service_id','vehicle_model','number_of_seats','vin_number')
											->where('provider_id',Auth::guard('provider')->user()->id)
											->whereNotIn('vehicle_model',['Gride Female','Gride Care'])
											->where('deleted_by',NULL)->get();
						if((!empty($ride['providerservice']['providervehicle']))) {
							$ride['providerservice']['providervehicle']['provider_vehicles'] = $provider_vehicles;
						}
					}
				}
			}
		}
		return Helper::getResponse(['data' => $ridetype ]);
    }catch (ModelNotFoundException $e) {
			return Helper::getResponse(['status' => 500, 'error' => $e->getMessage()]);
		}

	}
	

	
    
}
