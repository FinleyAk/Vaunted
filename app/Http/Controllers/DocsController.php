<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function index() { return view('documentation.index'); }

    public function global() { return view('documentation.global'); }

    public function commandLoader() { return view('documentation.handlers_CommandLoader.js'); }

    public function converter() { return view('documentation.handlers_Converter'); }

    public function typesVaunted() { return view('documentation.types_Vaunted.js'); }

    public function typesVauntedCommand() { return view('documentation.types_VauntedCommand'); }

    public function vaunted() { return view('documentation.vaunted'); }

    public function vauntedCommand() { return view('documentation.VauntedCommand'); }

}
