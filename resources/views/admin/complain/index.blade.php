@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-10 connectedSortable">
        {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Department
        </button>
        <br><br> --}}

        <div class="row">
            <div class="col-md-12">

                @forelse ($complains as $complain)
                <div class="panel panel-default">
                    <div class="panel-body">
                    <p style="font-weight: bolder">Posted {{$complain->created_at->diffForHumans()}}</p>
                        <div class="row">
                            <div class="col-md-3">
                                <div>From : <strong>{{$complain->fullname}}</strong></div>
                                <div>Email : {{$complain->email}}</div>
                                <div>Phone : {{$complain->phone}}</div>

                                <div>Staff Friendliness : {{$complain->stafffriendliness}}</div>
                                <div>Efficiency : {{$complain->efficiency}}</div>
                                <div>Secure Environment : {{$complain->securenviron}}</div>
                                                               
                                
                            </div>
                            <div class="col-md-3">
                                <div>Cleanliness : {{$complain->cleanliness}}</div>
                                <div>Comfortable : {{$complain->comfortable}}</div>
                                <div>Amenities : {{$complain->amenities}}</div>
                                <div>Working Condition : {{$complain->workingcondition}}</div>
                                <div>Room Service : {{$complain->roomservice}}</div>
                                <div>Restaurant : {{$complain->restaurant}}</div>
                                                                
                            </div>
                            <div class="col-md-3">
                                <div>Bar : {{$complain->bar}}</div>
                                <div>Food Quality : {{$complain->foodquality}}</div>
                                <div>Telephone : {{$complain->telephone}}</div>
                                <div>Laundry : {{$complain->laundry}}</div>
                                <div>Internet : {{$complain->internet}}</div>
                                <div>Meeting room : {{$complain->meetingroom}}</div>
                                
                            </div>
                            <div class="col-md-2">
                                <div>Comment : {{$complain->comment}}</div>
                                <div>Visit again? : {{$complain->visitagain}}</div>
                                <div>Tell a friend? : {{$complain->tellafriend}}</div>
                                <div>Rating : {{$complain->rateus}}</div>
                            </div>
                            <div class="col-md-1 pull-right">
                                <form id="delete-form-{{$complain->id}}" style="display: none"
                                    action="{{ route('complain.destroy',$complain->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
                                </form>
                                <a href="" onclick="
                                                    if (confirm('Are you sure you want to delete this?')) {
                                                        event.preventDefault();
                                                    document.getElementById('delete-form-{{$complain->id}}').submit();
                                                    } else {
                                                        event.preventDefault();
                                                    }
                                                "><span class="fa fa-trash fa-2x text-danger"></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                
                @empty
                <p style="background-color: crimson;" class="badge badge-info"><strong>No
                        Complain yet!</strong></p>
                @endforelse

                {{-- <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                <tr>
                                    <td>{{$department->name}}</td>
                <td>{{$department->code}}</td>

                <td><a href="{{ route('department.edit',$department->id) }}"><span
                            class="fa fa-edit fa-2x text-primary"></span></a></td>
                <td>
                    <form id="delete-form-{{$department->id}}" style="display: none"
                        action="{{ route('department.destroy',$department->id) }}" method="post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                    </form>
                    <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$department->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        "><span class="fa fa-trash fa-2x text-danger"></span>
                    </a>

                </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div> --}}
        <!-- /.box -->
</div>
</div>


</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
{{-- <section class="col-lg-5 connectedSortable"> --}}


{{-- </section> --}}
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection