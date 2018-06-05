<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class companycontroller extends Controller
{
    //
    public function companyselectforupdate()
    {
       /*  $company = new company;
        $company->C_Name = 'Nilkanth investments';
        $company->Description = 'NI descriptions';
        $company->Address = 'NI address';
        $company->Email = 'NI email';
        $company->Phone_No = '1234567890';
        $company->Fb_Link = 'NI fb link';
        $company->LinkedIn = 'NI linkedIn';
        $company->Contact_Us_Email = 'NI email';
        $company->Contact_Phone_No = '1234567890';
        $company->Logo = 'NI logo';
        $company->Size = 'S';
        $company->Modified_By = 'NI Private';
        $company->save(); */

        // select data from database for update form //
       $companydata['companydata'] = DB::table('company')->find(1);
       if(count($companydata > 0 ))
       {
           return view('Ad_back/company',$companydata);
       }
        else
        {
            return view('Ad_back/company');
        }

    }
    public function companyupdate(Request $request)
    {
        // select company record for update id = 1 //
      $companyforupdate = company::find(1);
      $companyforupdate->fill([
         'C_Name' => $request->input('C_Name'),
          'Description' => $request->input('Description'),
          'Address' => $request->input('Address'),
          'Email' => $request->input('Email'),
          'Phone_No' => $request->input('Phone_No'),
          'Fb_Link' => $request->input('Fb_Link'),
          'LinkedIn' => $request->input('LinkedIn'),
          'Contact_Us_Email' => $request->input('Contact_Us_Email'),
          'Contact_Phone_No' => $request->input('Contact_Phone_No'),
          'Modified_By' => 'Brijesh Ahir',
      ]);
      // company data update by save() //
        $companyforupdate->save();

        // condition of if else -> image path found then go to if condition otherwise else condition //
        $path = $request->file('Logo');
        if($path!="") {
            // select image -> Logo from company table to delete the image from storage and then further process for new image to upload -> this is for unwanted image remove when unused //
            $checkdataimage = new checkdataavoidduplication();
            $result_checkdataimage = $checkdataimage->checkdataform('company', 'id', 1);

            $result_array_from_json = json_decode($result_checkdataimage,true);
            $image__path_string_database =  $result_array_from_json[0]['Logo'];
             $image_path_of_storage = substr($image__path_string_database,'62');
           // checks image exists or not in storage if exists if condition will satisfied otherwise go to else condition -> this for delete older image //
            $exists_file_on_storage = Storage::disk('local')->exists($image_path_of_storage);
            if($exists_file_on_storage==1) {

                $orginalfilename = $path->getClientOriginalName();
                $imagerealpath = $path->getRealPath();
                $extension = $path->getClientOriginalExtension();
                $imagesize = $path->getClientSize();

                // image upload by this class -> takes older image to delete first
                $upload = new upload();
                $uploaded_or_not_by_here = $upload->uploadimage($orginalfilename, $imagerealpath, $extension, $imagesize, $image_path_of_storage);

                $companyforupdate->Logo = $uploaded_or_not_by_here;
                $companyforupdate->save();

            }
            else {

                $orginalfilename = $path->getClientOriginalName();
                $imagerealpath = $path->getRealPath();
                $extension = $path->getClientOriginalExtension();
                $imagesize = $path->getClientSize();

                // image upload by this class

                $upload = new upload();
                $uploaded_or_not_by_here = $upload->uploadimage($orginalfilename, $imagerealpath, $extension, $imagesize,'nottodeleteimage');

                $companyforupdate->Logo = $uploaded_or_not_by_here;
                $companyforupdate->save();



            }

        }


      return redirect()->route('company.selupd');
    }
    public function companylistdatashowfordisplay()
    {
        $array = array('name'=>'gaurav patel','des'=>'gaurav patel entry','email'=>'gauravpatel@gmail.com','phone'=>'437776');
        $exe = new insertglobal();
        $exe->insertrecordtodatabase('test2',$array);


        // company data shown to list page
        $companylistdatashowfordisplay['companylistdatashowfordisplay'] = DB::table('company')->find(1);
        if(count($companylistdatashowfordisplay > 0 )) {
            return view('Ad_back/company_list', $companylistdatashowfordisplay);
        }

    }
}
