<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function insert(Request $request){
      
        $request->validate([
        
          'filename'=>'mimes:docx,doc|required|max:10000',// max 10000kb

        
       ]);
       if ($request->hasFile('filename')) {
            
        $image = $request->file('filename');
      

         $filename = $image->getClientOriginalName();
        
         $destinationPath = public_path('/images');
          $image->move($destinationPath, $filename);
          //return back()->with('success','file saved successfully');
        
          $pdf = PDF::loadView('pdf',[
        
             'filename' => $filename,
          
        ]);
        
       
        return $pdf->download('travelspell.pdf');
       }
     

    }
}
