<?php
namespace App\Http\Controllers;
use App\Models\prodcuts;
use Bavix\Wallet\Interfaces\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = prodcuts::all();
        return view('b2b.product.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('b2b.product.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'link' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'short_desc' => 'required|max:200',
            'desc' => 'required'
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/products'), $imageName);
        prodcuts::create([
            'title' => $request->title,
            'link' => $request->link,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imageName,
            'short_description' => $request->short_desc,
            'description' => base64_encode($request->desc)
        ]);
        return redirect()->route("all-product.index")->with('status', 'Product Add Successfully!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prodcuts  $prodcuts
     * @return \Illuminate\Http\Response
     */
    public function show(prodcuts $prodcuts)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prodcuts  $prodcuts
     * @return \Illuminate\Http\Response
     */
    public function edit(prodcuts $prodcuts)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prodcuts  $prodcuts
     * @return \Illuminate\Http\Response
     */

    public function Update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required'
        ]);


        $formattedDob = date('Y-m-d', strtotime($request->dob));

        $products = prodcuts::find($id);

        // if ($request->hasFile('image')) {
        //     $imageName = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('uploads/products/'), $imageName);
        // } else {
        //     // Handle the case when no image is uploaded, e.g., assign a default image name
        //     $imageName = 'default.jpg';
        // }

        $desc =base64_encode($request->description);


        $products->update([
            'title' => $request->title,
            'link' => $request->link,
            'price' => $request->price,
            'stock' => $request->stock,
            'short_description' => $request->short_description,
            'description' => $desc,
            'updated_at' => now()
        ]);

        return redirect()->route("all-product.index")->with('message', 'Product Updated Successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prodcuts  $prodcuts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        prodcuts::destroy($id);
        return redirect()->route("all-product.index")->with('message', 'Product Delete Successfully!');
    }
    public function status($id,$status)
    {
        prodcuts::where('id',$id)->update([
            'status'=> $status
        ]);
        return redirect()->route("all-product.index")->with('message', 'Product Status Update Successfully!');
    }
    public function view()
    {
        $products = prodcuts::all();
        return view('b2b.product.view', compact('products'));
    }
    public function details($link)
    {
        $product = prodcuts::where('link',$link)->first();
        return view('b2b.product.detail', compact('product'));
    }
}
