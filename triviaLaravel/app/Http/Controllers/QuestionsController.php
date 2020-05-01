<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;

class QuestionsController extends Controller
{
    
    public function formSelectCategories() {
        $categorias = Category::all();
        $vac = compact('categorias');
        return view('agregarPregunta', $vac);
    }

    public function createQuestion(Request $request) {
        $ruta = $request->file('image')->store('public/images');
        $nombreArchivo = basename($ruta);

        $nuevaPregunta = new Question();
        $nuevaPregunta->question = $request['question'];
        $nuevaPregunta->option_1 = $request['option_1'];
        $nuevaPregunta->option_2 = $request['option_2'];
        $nuevaPregunta->option_3 = $request['option_3'];
        $nuevaPregunta->option_4 = $request['option_4'];
        $nuevaPregunta->category_id = $request['category_id'];
        $nuevaPregunta->image = $nombreArchivo;

        $nuevaPregunta->save();
        return redirect('/welcome');
    }

}
