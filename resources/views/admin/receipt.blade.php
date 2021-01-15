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
                                            ID
                                        </th>
                                        <th>
                                            Customer
                                        </th>
                                        <th>
                                            Address
                                        </th>
                                        <th>
                                            Card
                                        </th>
                                        <th>
                                            Total
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Option
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($receipts as $r)
                                        <tr>
                                            <td><a href="/receipt/{{$r->id}}">{{ $r->id }}</a></td>
                                            <td>{{$r->user->name}}</td>
                                            <td>{{$r->address}}</td>
                                            <td>{{$r->card_number}}</td>
                                            <td>{{$r->total}}</td>
                                            @if ($r->status != 'canceled')
                                                <td><p style="cursor: pointer; @if ($r->status == 'processing')
                                                    color: #f1c40f;
                                                @else
                                                    color: #009432;
                                                @endif" onclick="update({{$r->id}}, this)">{{$r->status}}</p>
                                                </td>
                                            @else
                                                <td><p style="color: #EA2027">Canceled</p></td>    
                                            @endif
                                            <script>
                                                function update(id, btn) {
                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function() {
                                                  if (this.readyState == 4 && this.status == 200) {
                                                   if(this.responseText == 1) {
                                                        btn.innerHTML = 'completed';
                                                        btn.style.color = '#009432';
                                                   }
                                                  }
                                                };
                                                xhttp.open("GET", "/receipt/update/"+id, true);
                                                xhttp.send();
                                              }
                                            </script>
                                            <td>
                                                <a href="/receipt/{{ $r->id }}" style="margin-right: 1em">View</a>
                                                @if ($r->status != 'canceled')
                                                    <p style="color: #EA2027; cursor: pointer"  onclick="cancel({{$r->id}}, this)">Cancel</p>
                                                @endif
                                                <script>
                                                    function cancel(id, btn) {
                                                    var xhttp = new XMLHttpRequest();
                                                    xhttp.onreadystatechange = function() {
                                                      if (this.readyState == 4 && this.status == 200) {
                                                       if(this.responseText == 1) {
                                                            btn.innerHTML = 'canceled';
                                                       }
                                                      }
                                                    };
                                                    xhttp.open("GET", "/receipt/cancel/"+id, true);
                                                    xhttp.send();
                                                  }
                                                </script>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Customer
                                        </th>
                                        <th>
                                            Address
                                        </th>
                                        <th>
                                            Card
                                        </th>
                                        <th>
                                            Total
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Option
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