<?php

namespace App\Http\Controllers;

use App\Tache;
use App\Categorie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /* Gets all Categories */
        $categories = Categorie::all();
        $arr_ctg = Array('categories' => $categories);

        /* Gets all Taches */
        $taches = Tache::all();
        $arr_tache = Array('taches' => $taches);

        return view('accueil.index', $arr_ctg, $arr_tache);
    }

    public function listeCtgTache($id){

        /* Gets all Categories */
        $categories = Categorie::all();
        $arr_ctg = Array('categories' => $categories);

        /* Gets all Taches */
        $taches = Tache::all()->where('id_ctg', $id);
        $arr_tache = Array('taches' => $taches);

        return view('accueil.index', $arr_ctg, $arr_tache);
    }



    public function listTache(){
        $categories = Categorie::all();
        $arrCtg = Array('categories'=>$categories);

        $taches = Tache::all();
        $arr = Array('taches'=>$taches);


        return view('taches.listTache', $arr, $arrCtg);
    }

     public function addTache(Request $request){
        if ($request->isMethod('post')){

            $request->validate([
                'title' => 'required',
                'categorie_id'=>'required',
                'textareaP' => 'required',
            ]);

            $tache = new Tache();

            $tache->title = $request->input('title');
            $tache->tache = $request->input('textareaP');
            $tache->id_ctg = $request->input('categorie_id');

            $tache->save();


            return back()
                ->with('success','You have successfully added a tache.');
        }

        /* Gets all Taches */
        $taches = Tache::all();
        $arr_tache = Array('taches' => $taches);

        /* Gets all Categories */
        $categories = Categorie::all();
        $arr = Array('categories'=>$categories);

        return view('taches.addTache',$arr, $arr_tache);
    }

      public function tache_update(Request $request, $id){

        $taches = Tache::find($id);

        if ($request->isMethod('post')){

            $request->validate([
                'title' => 'required',
                'categorie_id'=>'required',
                'textareaP' => 'required',
            ]);


            $taches->title = $request->input('title');
            $taches->tache = $request->input('textareaP');
            $taches->id_ctg = $request->input('categorie_id');

            $taches->update();


            return back()
                ->with('success','You have successfully modified this tache.');
        }

        $arr = Array('taches' => $taches);

        $categories = Categorie::all();
        $arrCtg = Array('categories'=>$categories);

        return view('taches.update', $arr, $arrCtg);
    }

    public function tache_delete($id){
        $tache = Tache::find($id);
        $tache->delete();

        $taches = Tache::all();
        $arr = Array('taches'=>$taches);

        $catgeorie = Categorie::all();
        $arrCtg = Array('categories'=>$catgeorie);

        return view('taches.listTache', $arr, $arrCtg); 
    }




    /** Categories Operations **/

    public function listCtg(){
        $categories = Categorie::all();
        $arrCtg = Array('categories'=>$categories);

        $taches = Tache::all();
        $arr = Array('taches'=>$taches);

        return view('categories.listCtg', $arr, $arrCtg);
    }

    public function addCategorie(Request $request){

        if ($request->isMethod('post')){
            $request->validate([
                'addCategorie' => 'required',
            ]);

            $newCtg = new Categorie();
            $newCtg->categorie = $request->input('addCategorie');
            $newCtg->save();

            return back()
                ->with('success','You have successfully added this category.');
        }

        $categories = Categorie::all();
        $arrCtg = Array('categories'=>$categories);

        $taches = Tache::all();
        $arr = Array('taches'=>$taches);

        return view('categories.addCategorie', $arrCtg, $arr);
    }

    public function updateCategorie(Request $request, $id){

        $categories = Categorie::find($id);

        if ($request->isMethod('post')){

            $request->validate([
                'updateCategorie' => 'required',
            ]);

            $categories->categorie = $request->input('updateCategorie');

            $categories->update();

            return back()
                ->with('success','You have successfully modified this category.');
        }

        $taches = Tache::all();
        $arr = Array('taches'=>$taches);

        $arrCtg = Array('categories'=>$categories);

        return view('categories.update', $arrCtg, $arr);
    }

    public function deleteCategorie($id){
        $categorie = Categorie::find($id);
        $categorie->delete();

        $categories = Categorie::all();
        $arrCtg = Array('categories'=>$categories);

        $taches = Tache::all();
        $arr = Array('taches'=>$taches);

        return view('categories.listCtg', $arr, $arrCtg);
    }

}