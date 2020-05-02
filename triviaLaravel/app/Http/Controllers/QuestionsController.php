<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;

class QuestionsController extends Controller
{
    
    public function formSelectCategories() {
        //Lista las categorías en el 'select de la vista 'agregarPregunta'.

        $categorias = Category::all();
        $vac = compact('categorias');
        return view('agregarPreguntas', $vac);
    }

    public function createQuestion(Request $request) {
        //Recibe el form 'agregarPreguntas'.

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

    public  function listQuestion() {
        //Lista las preguntas con sus categorías en la vista 'modificarPreguntas'.

        $listadoPreguntas = Question::paginate(2);
        $vac = compact('listadoPreguntas');
        return view('modificarPreguntas', $vac);
    }

    public function editForm($id) {
        //Devuelve la pregunta buscada por 'id' para editarla.

        $pregunta = Question::find($id);
        $categorias = Category::all();
        $vac = compact('pregunta', 'categorias');
        return view('editarPregunta', $vac);
    }

    public function edit(Request $request) {

        $pregunta = Question::find($request['id']);
        $pregunta->question = $request['question'];
        $pregunta->option_1 = $request['option_1'];
        $pregunta->option_2 = $request['option_2'];
        $pregunta->option_3 = $request['option_3'];
        $pregunta->option_4 = $request['option_4'];
        $pregunta->category_id = $request['category_id'];

        $pregunta->save();
        return redirect('/welcome');
    }
}
