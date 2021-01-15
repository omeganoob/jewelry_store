@extends('layouts.admin')

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                @include('admin.sidebar')
            </div><!--/.span3-->


            <div class="span9">
                <div class="content">

                    <div class="module">
                        <div class="module-head">
                            <h3>Products</h3>
                        </div>
                        <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Quantity
                                        </th>
                                        <th>
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $p)
                                        <tr>
                                            <td><a href="/product/{{$p->id}}">{{$p->name}}</a></td>
                                            <td>{{$p->category->name}}</td>
                                            <td>{{$p->price}}</td>
                                            <td>{{$p->quantity}}</td>
                                            <td>
                                                <a href="/product/edit/{{ $p->id }}" style="margin-right: 1em">Edit</a>
                                                <a href="/product/delete/{{ $p->id }}" style="color: red">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Quantity
                                        </th>
                                        <th>
                                            Options
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                <br/>
                    
                </div><!--/.content-->
            </div><!--/.span9-->
        </div>
    </div><!--/.container-->
</div><!--/.wrapper-->
@endsection