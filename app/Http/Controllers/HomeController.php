<?php
namespace App\Http\Controllers;
use App\Interview;
use App\Quention;
use App\Answer;
use \Illuminate\Support\Facades\Input;
class HomeController extends Controller{
    
    public function getIndex(){
        
        $data = Interview::all();
        return view('welcome',['data' => $data]);
    }
    public function postIndex(){
        
        $answers = Answer::get();
        $items = Input::get('answers');
        $i = 0;
        foreach ($items as $item){
            //echo $item;
            foreach ($answers as $answer){

                if(( $item == $answer->id) && ($answer->is_true == true)){
                    $i++;
                }
            }
        }
        echo 'Правильных ответов '.$i;
        
            
        
        
    }
    
    public function getTest($id){
        
        $interviews = Interview::where('id', '=', $id)->get();
        $quentions= Quention::where('interview_id', '=', $id)->get();
        $answers = Answer::get();    
        return view('test',['interviews' => $interviews,
                            'quentions'  => $quentions,
                            'answers'    => $answers
        ]);      
       

        
        
        
    }
    
}