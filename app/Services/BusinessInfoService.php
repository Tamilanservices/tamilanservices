<?php
/**
 * Created by IntelliJ IDEA.
 * User: Naveenraj S
 * Date: 21-09-2024
 * Time: 11:09 AM
 */

namespace App\Services;

use App\Models\District;
use App\Models\BusinessInfo;
use function Termwind\ValueObjects\pr;

class BusinessInfoService
{
    public function __construct()
    {

    }
    public function getAllDistricts()
    {
        return District::where('status', 'Y')->get();
    }


    public function addbusinessInfo($postVal=array())
    {
        $return=array();
        $businessInfo = new BusinessInfo();
        $businessInfo->phone = $postVal['mobile_num'];
        $businessInfo->business_name = $postVal['business_name'];
        $businessInfo->photo = $postVal['photo'];
        $businessInfo->address = $postVal['address'];
        $businessInfo->shortd_discription = $postVal['short_des'];
        $businessInfo->full_discription = $postVal['description'];
        $businessInfo->district_id = $postVal['district'];
        $businessInfo->status = 'Y';
        $businessInfo->created_by = 1;
        $businessInfo->created_at = getCurrentDateTime();
        if($businessInfo->save()){
            $return= array(
                'message' => 'Business information added successfully!',
                'status' => 'Success'
            );
        }
        return $return;
    }

    public function getAllBusinessInfo()
    {
        return BusinessInfo::where('status', 'Y')->get();
    }
    public function getBusinessInfo($id)
    {
        return BusinessInfo::where('id', $id)->first();
    }
}
