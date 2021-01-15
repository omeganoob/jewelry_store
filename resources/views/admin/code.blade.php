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
                            <h3>Tables</h3>
                        </div>
                        <div class="module-body">
                            <p>
                                <strong>Default</strong>
                                -
                                <small>table class="table"</small>
                            </p>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Code</th>
                                  <th>Discount</th>
                                  <th>Option</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($codes as $code)
                                      <tr>
                                          <td>{{ $code->id }}</td>
                                          <td>{{ $code->code }}</td>
                                          <td>{{ $code->discount }}</td>
                                          <td>
                                            <a href="/admin/delete/code/{{ $code->id }}" style="color: red">Delete</a>
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                            </table>

                            <br />
                            <!-- <hr /> -->
                            <br />
                        </div>
                    </div>

                <br />
                    
                </div><!--/.content-->
            </div><!--/.span9-->
        </div>
    </div><!--/.container-->
</div><!--/.wrapper-->
@endsection