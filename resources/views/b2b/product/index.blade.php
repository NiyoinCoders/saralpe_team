@extends("layouts.app")
@section("title","All Products")
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex header-title justify-content-between">
                            <h5 class="card-title">All Products</h5>
                            <a href="{{url('admin/add-product')}}" class="btn btn-primary">Add Product</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        <div class="table-responsive resp">
                            <table id="datatable" class="table table-striped table_style" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>Sr no</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Short Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $count= 1;
                                    @endphp
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td><img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="{{asset('uploads/products/'. $product->image)}}" alt="profile" /></td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->link}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->stock}}</td>
                                        <td>{{$product->short_description}}</td>
                                        <td><a href="{{route('all-product.status',['id'=>$product->id,'status'=>(($product->status == 1 )?0:1)])}}" class="btn btn-sm btn-{{($product->status == 1 )?'success':'danger'}}">{{($product->status == 1 )?"Active":"Inactive"}}</a></td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"  onclick="$('#my-modal2-{{$product->id}}').modal('show')"href="#">
                                                    <span class="btn-inner">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('all-product.destroy',$product->id)}}">
                                                    <span class="btn-inner">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <div id="my-modal2-{{$product->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                            <form action="{{ route('product.edit', $product->id) }}" method="POST">
                                                    @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="my-modal-title">Update Product Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                               
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-4 mx-auto">
                                                            <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="{{asset('uploads/products/'. $product->image)}}" alt="profile" /> 
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <ul class="list-unstyled text-dark">
                                                                <li><strong>Title:</strong><input type="text" class="form-control" name="title" value="{{$product->title}}"></li>
                                                                <li><strong>Link:</strong><input type="text" class="form-control" name="link" value="{{$product->link}}"></li>
                                                                <li><strong>Price:</strong><input type="text" class="form-control" name="price" value="{{$product->price}}"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <ul class="list-unstyled text-dark">
                                                                <li><strong>Stock:</strong><input type="text" class="form-control" name="stock" value="{{$product->stock}}"></li>
                                                                <li><strong>Description:</strong><input type="text" class="form-control" name="description" value="{{$product->description}}"></li>
                                                                <li><strong>Short Description:</strong><input type="text" class="form-control" name="short_description" value="{{$product->short_description}}"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4">
                                                           
                                                        </div>
                                                    </div>
                                                    <button class="w-100 btn btn-lg btn-success" name="update" type="submit">Update</button>
                                                </div>
                                                    
                                                 </form>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                    $count++;
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection