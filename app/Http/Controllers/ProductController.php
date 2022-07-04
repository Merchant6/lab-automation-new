<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\products;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if(Auth::check()){
           
            $total =  DB::table('products_tb')->count();

            //Testes Products
            $etesting = DB::table('products_tb')->where('testing_type', '=', "Earth Testing")->count();
            $rtesting = DB::table('products_tb')->where('testing_type', '=', "Resistance Testing")->count();
            $letesting = DB::table('products_tb')->where('testing_type', '=', "Leakage Testing")->count();

            $tested = $etesting + $rtesting + $letesting;

            //Untested Products
            $untested = DB::table('products_tb')->where('testing_type', '=', "Not Tested Yet")->count();

            //Latest Products
            $latest = products::latest()->limit(4)->get();
           
            if($untested == 0)
            {
                $ratio = $tested;
            }
            elseif($tested == 0)
            {
                $ratio = $untested;
            }
            else
            {
                $ratio = $tested / $untested;
            }

            return view('dashboard\home',['total' => $total,'tested' => $tested,'untested' => $untested, 'ratio' => $ratio, 'latest' => $latest]);
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products\add-product');
    }

    public function createProduct(Request $request)
    {
        
            $request->validate([
                'product_name' => 'required',
                'category' => 'required',
                'testing_type' => 'required',
                'remarks' => 'required',
            ]);
    
            $data = $request->all();
            products::create([
                'product_name' => $data['product_name'],
                'category' => $data['category'],
                'testing_type' => $data['testing_type'],
                'remarks' => $data['remarks'],
              ]);

               

              
            
              return redirect()->to('view_products')->with(['success','Product added successfully', 'manID' , 'formatID']);
        
       
    }

            public function viewDetails(Request $request)
            {
                  
                $p_details = products::all();
                return view('products\view_products', compact('p_details'));
            }

            public function search(Request $request)
            {
                $search = $request['search'] ?? "";
                if($search !== null)
                {
                    $p_details = products::where('product_name', 'LIKE', "%$search%")
                    ->orwhere('testing_type', 'LIKE', "%$search%")
                    ->orwhere('id', 'LIKE', "%$search%")
                    ->orwhere('remarks', 'LIKE', "$search%")
                    ->orwhere('category', 'LIKE', "$search%")
                    ->get();
                    
                   
                }
                else
                {
                    
                    return redirect()->to('view_products')->with('error','Product not found');
                    $p_details = products::all();

                }

                
                return view('products\view_products', compact('p_details'));
            }



        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function show($id)
        {
                
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_edit = products::findOrFail($id);
        return view('products\edit', compact('product_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
               'product_name' => 'required',
                'category' => 'required',
                'testing_type' => 'required',
                'remarks' => 'required'
        ]);
         products::whereId($id)->update($validatedData);

        

        return redirect('view_products')->with('success', 'Product data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = products::findOrFail($id);
        $products->delete();

        return redirect('view_products')->with('error', 'Product successfully deleted');
    }


    
   

    
}
