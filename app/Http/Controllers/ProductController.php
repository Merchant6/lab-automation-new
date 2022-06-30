<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\products;
use Exception;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

              
            
              return redirect()->to('view_products')->with('success','Product added successfully');
        
       
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
                    $p_details = products::where('product_name', 'LIKE', "%$search%")->get();
                    
                   
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
        public function show()
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
        //
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
        //
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
