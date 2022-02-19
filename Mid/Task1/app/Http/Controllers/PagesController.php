<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }
    public function login(){
        return view('home.login');
    }
    public function contacts(){
        $contact = array
        (
            "name"=>"Tanvir Ahmed",
            "profession"=>"Developer",
            "email"=> "t.a@st.edu"
        );
        $contact = (object) $contact;
        $contact2 = array
        (
            "name"=>"Rayhan fardous",
            "profession"=>"Co-ordinator",
            "email"=> "rayhan@st.edu"
        );
        $contact2 = (object) $contact2;
        $contact3 = array
        (
            "name"=>"Musfiqur Rahman",
            "profession"=>"Manager",
            "email"=> "musfiq@st.edu"
        );
        $contact3 = (object) $contact3;

        return view('home.contacts')
        ->with('contact', $contact)
        ->with('contact2', $contact2)
        ->with('contact3', $contact3);
    }
    
    /*public function get(){
        $course = array
        (
            "Course"=>"Programming with Python",
            "Instructor"=>"Mr. Devid",
            "Duration"=> "4 Months",
            "Starts"=>"10th February 2022"
        );
        $course = (object) $course;
        return view('home.index') ->with ('course', $course);
    } */
}
