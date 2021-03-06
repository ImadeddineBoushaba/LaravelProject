<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;

class CvController extends Controller
{
    	//liste les cvs
    	public function index() {

            $listecv = Cv::all();

            return view('cv.index',['cvs' => $listecv]);

    }

     	//Afficher le formulaire de cv
     	public function create() {
            return view ('cv.create');

    }

 		//Enregister un cv
 		public function store(Request $request) {
            $cv = new Cv();

            $cv->titre = $request->input('titre');
            $cv->presentation = $request->input('presentation');
            $cv->save();
            return redirect('cvs');


    }
 		//Permet de récuperer un cv
 		public function edit($id) {
            $cv = Cv::find($id);
            return view('cv.edit',['cv' => $cv]);

    }
 		//Permet de modifier un cv
 		public function update(Request $request,$id) {
            $cv = Cv::find($id);
            $cv->titre = $request->input('titre');
            $cv->presentation = $request->input('presentation');
            $cv->save();
            return redirect('cvs');


    }
 		//Permet de supprimer un cv
 		public function destroy(Request $request,$id) {
                $cv = Cv::find($id);
                  $cv->delete();
            return redirect('cvs');

    }
 		

}
