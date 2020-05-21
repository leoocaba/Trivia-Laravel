<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;
use Image;
class QuestionsController extends Controller
{

    public function formSelectCategories() {
        //Lista las categorías en el 'select de la vista 'agregarPregunta'.

        $categorias = Category::all();
        $vac = compact('categorias');
        return view('agregarPreguntas', $vac);
    }

    public function createQuestion(Request $request)
        //Recibe el form 'agregarPreguntas'.
    {
        $reglas = [
        'question' => 'required|max:300|min:1',
        'option_1' => 'required|min:1|max:50',
        'option_2' => 'required|min:1|max:50',
        'option_3' => 'required|min:1|max:50',
        'option_4' => 'required|min:1|max:50',
        'category_id' => 'required',
        'image' => 'image',
        ];

        $mensajes = [
        'required' => 'El campo :attribute es obligatorio',
        'min' => 'El campo :attribute debe tener al menos 1 caracter',
        'max' => 'El campo :attribute puede tener como máximo :max',
        'image' => 'Debe seleccionar una imagen tipo .jpg o .png'
        ];

        $this->validate($request, $reglas, $mensajes);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/images/image/'.$filename);
            Image::make($image->getRealPath())->save($path);
            
        }

        $nuevaPregunta = new Question();
        $nuevaPregunta->question = $request['question'];
        $nuevaPregunta->option_1 = $request['option_1'];
        $nuevaPregunta->option_2 = $request['option_2'];
        $nuevaPregunta->option_3 = $request['option_3'];
        $nuevaPregunta->option_4 = $request['option_4'];
        $nuevaPregunta->category_id = $request['category_id'];
        $nuevaPregunta->image = $filename;

        $nuevaPregunta->save();
        return redirect('/welcome');
    }
//modificando listadoPreguntas
    public  function listQuestion2() {
        //Lista las preguntas con sus categorías
        $listadoPreguntas = Question::paginate(2);
        $listadoPreguntas = Question::orderByRaw('RAND()')->take(1)->get();

        $vac = compact('listadoPreguntas');
        return  $vac;
    }

    public  function listQuestion() {
        //Lista las preguntas con sus categorías en la vista 'modificarPreguntas'.

        $listadoPreguntas = Question::paginate(2);
        $vac = compact('listadoPreguntas');
        return view('modificarPreguntas', $vac);
    }

// fin modificando listadoPreguntas

    public function editForm($id) {
        //Devuelve la pregunta buscada por 'id' para editarla.

        $pregunta = Question::find($id);
        $categorias = Category::all();
        $vac = compact('pregunta', 'categorias');
        return view('editarPregunta', $vac);
    }

    public function edit(Request $request, $id) {

        $reglas = [
        'question' => 'required|max:300|min:1',
        'option_1' => 'required|min:1|max:50',
        'option_2' => 'required|min:1|max:50',
        'option_3' => 'required|min:1|max:50',
        'option_4' => 'required|min:1|max:50',
        'category_id' => 'required',
        'image' => 'image',
        ];

        $mensajes = [
        'required' => 'El campo :attribute es obligatorio',
        'min' => 'El campo :attribute debe tener al menos 1 caracter',
        'max' => 'El campo :attribute puede tener como máximo :max',
        'image' => 'Debe seleccionar una imagen tipo .jpg o .png'
        ];

        $this->validate($request, $reglas, $mensajes);

        $pregunta = Question::find($id);
        $pregunta->question = $request['question'];
        $pregunta->option_1 = $request['option_1'];
        $pregunta->option_2 = $request['option_2'];
        $pregunta->option_3 = $request['option_3'];
        $pregunta->option_4 = $request['option_4'];
        $pregunta->category_id = $request['category_id'];

        $pregunta->save();
        return redirect('/welcome');
    }

    public function deleteQuestion($id) {
        $pregunta = Question::find($id);
        $vac = compact('pregunta');
        return view('eliminarPreguntas', $vac);

    }

    public function delete(Request $request){
        $id = $request['id'];
        $pregunta = Question::find($id);
        $pregunta->delete();
        return redirect('/modificar/preguntas');
    }

}
