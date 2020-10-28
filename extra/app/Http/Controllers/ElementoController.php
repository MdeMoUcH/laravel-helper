<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Elemento;

class ElementoController extends Controller
{
	public function __invoke(){
		//return 'Laravel app Elementos<br><a href="/elementos/PS/5">PS5</a><br><br><a href="/">home</a>';

		//$elementos = Elemento::all();
		//return $elementos;

		$elementos = Elemento::orderBy('id','desc')->paginate();
		
		return view('elementos.index', compact('elementos'));
	}
	
	public function create(){
		return view('elementos.create');
	}
	
	public function store(Request $request){
		//return $request->all();
		$elemento = new Elemento();
		$elemento->name = $request->name;
		$elemento->version = $request->version;
		$elemento->description = $request->description;
		$elemento->save();

		return redirect()->route('elementos.show',$elemento->id);
	}
	
	public function show($id, $version = null){
		//return view('elementos.show',compact('elemento','version'));
		/*if($version){
			return view('elementos.show_version',compact('elemento','version'));
		}else{
			return view('elementos.show',compact('elemento'));
		}*/

		
		$elemento = Elemento::find($id);
		return view('elementos.show', compact('elemento'));
	}
	
	public function edit(Elemento $elemento){
		return view('elementos.edit', compact('elemento'));
	}
	
	public function save(Request $request, Elemento $elemento){
		$elemento->name = $request->name;
		$elemento->version = $request->version;
		$elemento->description = $request->description;
		$elemento->save();
		
		return redirect()->route('elementos.show',$elemento->id);
	}
}
