<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;

class QuestionsController extends Controller
{
    public function createQuestion(Request $request) {
        $ruta = $request->file('image')->store('public/images');
        $nombreArchivo = basename($ruta);

        $nuevoPais = new Question();
        $nuevoPais->question = $request['question'];
        $nuevoPais->option_1 = $request['option_1'];
        $nuevoPais->option_2 = $request['option_2'];
        $nuevoPais->option_3 = $request['option_3'];
        $nuevoPais->option_4 = $request['option_4'];
        $nuevoPais->category_id = $request['category_id'];
        $nuevoPais->image = $nombreArchivo;

        $nuevoPais->save();
        return redirect('/welcome');
    }
}
