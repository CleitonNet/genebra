<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function welcome()            { return view('website.welcome');            }
    public function about()              { return view('website.about');            }
    public function methodology()        { return view('website.methodology');        }
    public function campus()             { return view('website.campus');             }
    public function cosmovisao()         { return view('website.cosmovisao');         }
    public function educational_model()  { return view('website.educational_model');  }
    public function trilingual_program() { return view('website.trilingual_program'); }
    public function teaching_staff()     { return view('website.teaching_staff');     }
    public function education_system()   { return view('website.education_system');   }
    public function nursery()            { return view('website.nursery');            }
    public function child_education()    { return view('website.child_education');    }
    public function primary()            { return view('website.primary');            }
    public function high_school()        { return view('website.high_school');        }
    public function segments()           { return view('website.segments');           }
}
