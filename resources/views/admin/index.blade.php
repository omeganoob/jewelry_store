@extends('layouts.admin')

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                @include('admin.sidebar')
                <!--/.sidebar-->
            </div>
            <!--/.span3-->
            <div class="span9">
                <div class="content">
                    <div class="btn-controls">
                        <div class="btn-box-row row-fluid">
                            <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>{{ $products_count }}</b>
                                <p class="text-muted">
                                    Products</p>
                            </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>{{ $users }}</b>
                                <p class="text-muted">
                                    Users</p>
                            </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                                <p class="text-muted">
                                    Profit</p>
                            </a>
                        </div>
                        <div class="btn-box-row row-fluid">
                            <div class="span8">
                                <div class="row-fluid">
                                    <div class="span12">
                                        <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                        </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Clients</b>
                                        </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                                        </a>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
                                        </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                                        </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                            Rate</b> </a>
                                    </div>
                                </div>
                            </div>
                            <ul class="widget widget-usage unstyled span4">
                                <li>
                                    <p>
                                        <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
                                    </p>
                                    <div class="progress tight">
                                        <div class="bar" style="width: 78%;">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>
                                        <strong>Mac</strong> <span class="pull-right small muted">56%</span>
                                    </p>
                                    <div class="progress tight">
                                        <div class="bar bar-success" style="width: 56%;">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>
                                        <strong>Linux</strong> <span class="pull-right small muted">44%</span>
                                    </p>
                                    <div class="progress tight">
                                        <div class="bar bar-warning" style="width: 44%;">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>
                                        <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
                                    </p>
                                    <div class="progress tight">
                                        <div class="bar bar-danger" style="width: 67%;">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/.module-->
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
                    <!--/.module-->
                </div>
                <!--/.content-->
            </div>
            <!--/.span9-->
        </div>
    </div>
    <!--/.container-->
</div>
<!--/.wrapper-->
@endsection

