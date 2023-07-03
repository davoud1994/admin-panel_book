<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class bookscontroller extends Controller
{
    public function index(){
        $books=Books::all();
   
        return view ('admin.books')->with('books',$books);
       
    }

public function store(Request $request){


  
        $books= new Books;
        $books->title=$request->input("Title");
        $books->writer=$request->input("Writer");
        $books->price=$request->input("Price");
    
  
        if ($request->hasFile('Image')) {
            $file=$request->file('Image');         
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move(public_path("storage/uploads"), $filename);
            $books->images= $filename;
            ;}
        
               
        $books->Save();

        return redirect('/books')->with('status','Data added');

      }

      public function edit($id){
         $books=Books::findOrFail($id);
        
        return view('admin.books_1.edit')->with('books',$books)->with('status','Data added');
        
      }

      public function update(Request $request,$id){
        $books=Books::findOrFail($id);    
        $books->title=$request->input("Title");
        $books->writer=$request->input("Writer");
        $books->price=$request->input("Price");

        

        if ($request->hasFile('Image')) {
            $file=$request->file('Image');         
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move(public_path("storage/uploads"), $filename);
            $books->images= $filename;
            ;}

             $books->update();
     
            return redirect('/books')->with('status','Data updated');

        
      }

      public function delete($id){
        $books= Books::findOrFail($id);
        $books->delete();
        return redirect('/books')->with('status','your data is Deleted');
      }



      
     }
    
   
   
    
    
  
                                  
      
      
  

  

   

       


  
     
   

                              





               
                

        
                
              

  
           
            
     
            
  
        
         
       
        
         

    
        
         
     

           
          
    

