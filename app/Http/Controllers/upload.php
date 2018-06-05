<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
class upload extends Controller
{
    //
   // public $image_filname;
    public function uploadimage($imagefileoriginalname,$imagerealpath,$imageextension,$imagesize, $deleteoldimage)
    {
        if($imagesize == 0)
        {
           return redirect()->back()->with('error','Failed to upload image!');
        }
        elseif($imagesize <= 1964222 && $imagesize >=1 ) {
            if ($imageextension == 'JPG' || $imageextension == 'jpg' || $imageextension == 'PNG' || $imageextension == 'png' || $imageextension == 'JPEG' || $imageextension == 'jpeg') {
                try {

                    If($deleteoldimage!='nottodeleteimage') {
                        // here older image will delete first for preventing unwanted image memory consumption. //
                        Storage::delete($deleteoldimage);
                    }
                    $image_upload_date = date('d-m-Y');
                    $image_unique_no = uniqid();

                    // image will store to storage
                    $store = Storage::put('public/uploads/images/'.$image_upload_date.'_'.$image_unique_no.'_'. $imagefileoriginalname, file_get_contents($imagerealpath));

                    // tinify api used to compress image and saves the compressed image to that specified path of storage //
                    \Tinify\setKey("1kmynxcLcI09yaZjC-G7YySTRLMYhtjl");
                    $source = \Tinify\fromFile(Storage_path('app/public/uploads/images/'.$image_upload_date.'_'.$image_unique_no.'_'.$imagefileoriginalname));
                    $source->toFile(Storage_path('app/public/uploads/images/'.$image_upload_date.'_'.$image_unique_no.'_'.$imagefileoriginalname));

                    // function will return the image path to save in database at end
                    return Storage_path("app/public/uploads/images/".$image_upload_date."_".$image_unique_no."_".$imagefileoriginalname);
                       // Use the Tinify API client.
                } catch(\Tinify\AccountException $e) {
                    return redirect()->back()->with('error',$e->getMessage());
                    // Verify your API key and account limit.
                } catch(\Tinify\ClientException $e) {
                    return redirect()->back()->with('error',$e->getMessage());
                    // Check your source image and request options.
                } catch(\Tinify\ServerException $e) {
                    return redirect()->back()->with('error',$e->getMessage());
                    // Temporary issue with the Tinify API.
                } catch(\Tinify\ConnectionException $e) {
                    return redirect()->back()->with('error',$e->getMessage());
                    // A network connection error occurred.
                } catch(Exception $e) {
                    return redirect()->back()->with('error',$e->getMessage());
                    // Something else went wrong, unrelated to the Tinify API.
                }


            } else {
                return redirect()->back()->with('error','.'.$imageextension .' file is not accepted');
            }
        }
        elseif($imagesize > 1964222 )
        {
            return redirect()->back()->with('error',$imagesize.' kb, size exceeded');
        }

    }
}
