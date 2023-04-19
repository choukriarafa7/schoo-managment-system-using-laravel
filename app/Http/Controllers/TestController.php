<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class TestController extends Controller
{
    public function test(){
        // $ids = Teacher::findorFail(auth()->user()->id)->Sections()->pluck('section_id');
        // $data['count_sections']= $ids->count();
        // $data['count_students']= \App\Models\Student::whereIn('section_id',$ids)->count();
        $ids = Grade::find(1)->Sections()->pluck('id');
        $data ['count_sections'] = $ids->count();
        $data['count_students']= \App\Models\Student::whereIn('section_id',$ids)->get();
        return $data['count_students'];
    }
}
