<?php
/**
 * Created by PhpStorm.
 * User: Tanguy
 * Date: 7/11/2016
 * Time: 10:58
 */

namespace App\Repositories;


use App\Contracts\RepositoryContract as RepositoryContract;
use App\Models\Asset;
use Carbon\Carbon;
use App\Models\Location as Location;

class AssetRepository implements RepositoryContract
{
    public function create($asset)
    {
      //  var_dump($asset['purchase_date']);
       // $MySQLdatum = date('Y-m-d', $asset['purchase_date']);
        if(Asset::create([
                'name' => $asset['name'],
                'asset_tag' => $asset['asset_tag'],
                'model_id' => $asset['model_id'],
               // 'purchase_date' => $MySQLdatum,//$var = date('Y-m-d',strtotime($asset['purchase_date'])),
               // 'purchase_cost' => $asset['purchase_cost'],
               // 'order_number' => $asset['order_number'],
               // 'notes' => $asset['notes'],
               // 'image' => $asset['image'],
               // 'user_id' => $asset['user_id'],
               // 'created_at' => Carbon::now(),
               // 'updated_at' => Carbon::now(),
               // 'deleted_at' => null,
                'status_id' => $asset['status_id']
                //'archived' => null,
                //'warranty_months' => $asset['warranty_months'],
                //'depreciate' => null,
                //'supplier_id' => $asset['supplier_id'],
                //'requestable' => $asset['requestable'],
               // 'rtd_location_id' => $asset['rtd_location_id'],
              //  'accepted' => $asset['accepted'],
                //'last_checkout' => null,
               // 'expected_checkin' => null,
             //   'company_id' => $asset['company_id']
            ])){
            return true;
        }
        else{
            return false;
        }
    }
    

    public function delete($id)
    {
        if($asset = Asset::where('id', $id))
        {
            $asset->delete();
            return true;
        }
         return false;
    }

    public function update($asset, $id)
    {
       if(Asset::find($id))
        {
            $var = Asset::find($id);
            $var->name = $asset['name'];
            $var->asset_tag = $asset['asset_tag'];
            $var->model_id = $asset['model_id'];
            $var->status_id = $asset['status_id'];
            $var->save();
            return true;
        }
        else
            return false;
    }

    public function getById($id)
    {
        if (Asset::find($id)){
        $var =  Asset::find($id);
        if (!$var["rtd_location_id"] == null){
                $var["location"] = Location::where('id', $var["rtd_location_id"])->get()[0]["name"];
                unset($var["rtd_location_id"]);
            }
        else{
                $var->location = "onbekend LOCATIE";
                unset($var["rtd_location_id"]);
            }
        
        return $var;
    }

    else {
        $var2 = "De opgevraagde variabele werd niet gevonden";
        return $var2;}
    }

    public function getAll()
    {
        $var =  Asset::all();
        for ($i=0; $i < count($var); $i++) {  
            if (!$var[$i]["rtd_location_id"] == null){
                $naam = Location::where('id', $var[$i]["rtd_location_id"])->get()[0]["attributes"]["name"];
                $var[$i]["location"] = $naam;
                unset($var[$i]["rtd_location_id"]); 
            } 
            else{
                $var[$i]["location"] = "onbekend LOCATIE";
                unset($var[$i]["rtd_location_id"]);
            }
        }      
       return $var;
    }

}