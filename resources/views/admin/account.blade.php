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
                                  <th>Username</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Permission</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($users as $user)
                                      <tr>
                                          <td>{{ $user->username }}</td>
                                          <td>{{ $user->name }}</td>
                                          <td>{{ $user->email }}</td>
                                          <td> @if ($user->permission == 1)
                                              <p style="color: lime">Administrator</p>
                                          @else
                                              User
                                          @endif </td>
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