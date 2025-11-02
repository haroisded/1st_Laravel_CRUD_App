<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\users_table;



class Form_Processor
{
   
    protected $user = NULL;
    protected $ID_Setter = NULL;
    protected $body = NULL;

    public function __construct(Request $request){ 
        $this->ID_Setter = users_table::max('id') + 1; 
        $this->body = $request->all(); 
    }


    public function __invoke(Request $request){ 

            if( $request->route()->getName() == 'create' && $request->ismethod('post') ){ 

                $this->user = new users_table;

                if( Empty( $this->ID_Setter ) ){ $this->ID_Setter = 1; }

                users_table::create([
                    'id' => $this->ID_Setter,
                    'Name'   => $this->body['Name'],
                    'Age'    => $this->body['Age'],
                    'Gender' => $this->body['Gender'] 
                ]); 
            }

            elseif( $request->route()->getName() == 'update' && $request->ismethod('put') ){   

                users_table::query()
                ->where('id', $this->body['id'])
                ->update([
                'Name'   => Empty($this->body['Name'])   ? $this->body['Def_Name']   : $this->body['Name'],
                'Age'    => Empty($this->body['Age'])    ? $this->body['Def_Age']    : $this->body['Age'],
                'Gender' => Empty($this->body['Gender']) ? $this->body['Def_Gender'] : $this->body['Gender'],
                ]);
            }

            elseif( $request->route()->getName() == 'delete' && $request->ismethod('delete') ){
                
                users_table::destroy($this->body['id']);

                users_table::where('id', '>', $this->body['id'])-> decrement('id', 1);
            }


        return redirect('/');
    }

    
}
