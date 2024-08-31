<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function create_file(){
        return view('file.create_file');
    }

    public function save_file(Request $request){
        $data=new File();
        $data->name=$request->name;
        $data->description=$request->description;

        $request->validate([
            'file'=> 'required|mimes:pdf,doc,docx,xlx,csv,jpg,png|max:4048',
        ]);

        $file=$request->file;
        if($file){
            $fileName=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('Files',$fileName);

            $data->file=$fileName;
        }

        // $filewritter = new file;
        // $filewritter -> file = $filename;
        // $filewritter->save();

        $data->save();
        return redirect()->route('file.show_data');


    }

    public function show_file_data(){
        $data = file::all();
        return view('file.display_file_data', compact('data'));
        }

    public function file_view($id)
        {
            $data = file::find($id);
            return view('file.view_file', compact('data'));
        }
        
        

        public function file_download($file){
            return response()->download(public_path('Files/'.$file));
            }
        
        public function remove($id){
                $data = File::find($id);
                if ($data) {
                    $filePath = public_path('Files/' . $data->file);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                    $data->delete();
                }
                return redirect()->route('file.show_data')->with('success', 'File deleted successfully');
            }
            
}
