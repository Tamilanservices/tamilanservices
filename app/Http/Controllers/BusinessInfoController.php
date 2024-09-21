<?php

namespace App\Http\Controllers;

use App\Services\BusinessInfoService;
use Illuminate\Http\Request;
use function Termwind\ValueObjects\pr;

class BusinessInfoController extends Controller
{
    public function __construct(BusinessInfoService $businessInfoService)
    {
        $this->businessInfoService = $businessInfoService;
    }


    public function index()
    {

        $userData = array();
        return view('pages.home', compact('userData'));
    }

    public function addInfo()
    {

        if(isset($_POST['submit']) && $_POST['submit']=='Save'){
            $postVal=$_POST;
            if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
                $file = $_FILES['photo'];
                $postVal['photo']= $path= 'uploads/' . $file['name'];
                move_uploaded_file($file['tmp_name'], storage_path($path));
            }
            $responce=$this->businessInfoService->addbusinessInfo($postVal);
            if($responce['status']=='Success') {
                return redirect()->route('listing');
            }
        }
        $pageData['districts'] =   $this->businessInfoService->getAllDistricts();
        return view('pages.add_business', compact('pageData'));
    }
    public function store(Request $request)
    {
        $userData = array();
        return $userData;
    }
    public function listing()
    {
        $pageData['allBusiness'] =   $this->businessInfoService->getAllBusinessInfo();
        return view('pages.listing', compact('pageData'));
    }
    public function bus_details(Request $request,$id)
    {
        $pageData['info'] =   $this->businessInfoService->getBusinessInfo($id);
        return view('pages.details', compact('pageData'));
    }
}
