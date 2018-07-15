<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VisitorListRequest;
use App\Http\Requests\VisitorListRequestEdit;
use App\VisitorList;

class VisitorController extends Controller
{

    

   public function store(VisitorListRequest $request){

       $forvisitor = new VisitorList();
       $forvisitor->title = $request->title;
       $forvisitor->short_desc = $request->short_desc;
       $forvisitor->status = $request->status;
       $forvisitor->image_alt  = $request->image_alt;
       //$input = $request->all();
        if($file = $request->file('image_path')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/Patients&VisitorLists' , $name);
            $forvisitor->image_path = $name;
        }
         $forvisitor->save();
         return redirect('/admin/patients_visitors_list')->with('message', 'The information has been saved/updated successfully.');
   }



   public function edit($id)
   {
       $patient = VisitorList::findOrFail($id);
       return view('admin.patients.partial.edit_patient_list', compact('patient'));
   }


   public function update(VisitorListRequestEdit $request, $id)
   {

       $forvisitor = VisitorList::findOrFail($id);
       $forvisitor->title = $request->title;
       $forvisitor->short_desc = $request->short_desc;
       $forvisitor->status = $request->status;
       $forvisitor->image_alt  = $request->image_alt;

       if($file = $request->file('image_path')){

            $old_image_path = $forvisitor->image_path;

            $path = 'images/Patients&VisitorLists/'.$old_image_path;
       
            if(file_exists($path)){
                unlink($path);
                $forvisitor->image_path = null;
                $forvisitor->update();
            }

            $name = time() . $file->getClientOriginalName();
            $file->move('images/Patients&VisitorLists' , $name);
            $forvisitor->image_path = $name;
        }
       $forvisitor->update();
       return redirect('/admin/patients_visitors_list')
       ->with('message', 'The information has been updated successfully.');
   }





   public function deleteIconVisitorImage($id) 
   {
       $visitor = VisitorList::findOrFail($id);
       $image_path = $visitor->image_path;
       $path = 'images/Patients&VisitorLists/'.$image_path;
       
       if(file_exists($path)){
           unlink($path);
           $visitor->image_path = null;
           $visitor->update();
       }

       //return response()->json(['success'=>"Patients have been deleted successfully."]);
       return $visitor;
   }




   public function getDeleteVisitorList($id)
   {
       $visitor = VisitorList::findOrFail($id);
       return view('admin.visitors.partial_visitor.delete_visitor_list',compact('visitor'));
   }

   public function deleteVisitorList($id)
   {
       $visitor = VisitorList::findOrFail($id);
       $visitorTitle = $visitor->title;
       $image_path = $visitor->image_path;

       if($visitor->delete()){            
            $path = 'images/Patients&VisitorLists/'.$image_path;
            
            if(file_exists($path)){
                unlink($path);
                $visitor->image_path == null;
                $visitor->update();
            }

           return redirect('/admin/patients_visitors_list')
               ->with('message', $visitorTitle.' has been deleted successfully.');
       }
   }




   public function deleteAllVisitorList()   
   {
       $visitors = VisitorList::all();

       if(count($visitors)>0){

            foreach($visitors as $visitor)
            {
                $image_path = $visitor->image_path;
                $path = 'images/Patients&VisitorLists/'.$image_path;
            
                if(file_exists($path)){
                    unlink($path);
                    $visitor->image_path = null;
                    $visitor->update();
                }
                $visitor->delete();
            }

            return redirect('/admin/patients_visitors_list')
               ->with('message','All visitors lists have been deleted successfully.');
       }else{
           return redirect('/admin/patients_visitors_list');
       }    

   }




 
   public function DeleteSelectedVisitorList(Request $request)
   {
    $ids = $request->ids;
    $patients = VisitorList::whereIn('id',explode(",",$ids))->get();

    foreach ($patients as $patient) {
        
                $image_path = $patient->image_path;
                $path = 'images/Patients&VisitorLists/'.$image_path;
            
                if(file_exists($path)){
                    unlink($path);
                    $patient->image_path = null;
                    $patient->update();
                }
                $patient->delete();

    }

    return response()->json(['success'=>"Patients have been deleted successfully."]);    
   }




}



