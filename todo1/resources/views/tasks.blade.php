@extends('layouts.app2')

@section('content')
    <div class="container">
        @if(Session::has('status'))
            <div class="alert alert-success">
              <strong>Success!</strong> {{Session::get('status')}}.
            </div>
        @endif
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    {{-- @include('common.errors') --}}

                    <!-- New Task Form -->
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                @foreach ($tasks as $task)
                <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse{{$task->id}}">{{$task->name}} by {{$task->user->name}}</a>
                      </h4>
                    </div>
                    <div id="collapse{{$task->id}}" class="panel-collapse collapse">
                      <div class="panel-body">
                        @foreach($task->comment as $comment)
                            <p><strong>{{$comment->content}}</strong> <br><small>by {{$comment->user->name}} {{$comment->updated_at->diffForHumans()}}</small></p><hr>
                        @endforeach
                        <form class="form-horizontal" method="POST" action='{{url("task/$task->id/comment")}}'>
                            {{csrf_field()}}
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="comment">Comment:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="comment" name="content">
                            </div>
                          </div>
                          <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      {{-- <div class="panel-footer">Comments: </div> --}}
                    </div>
                  </div>
                </div>
                @endforeach
                {{-- <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }} by {{$task->user->name }}</div></td>
                                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$task->id}}"><i class="fa fa-btn fa-edit"></i>Edit</button></td>
                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div id="editModal{{$task->id}}" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">
                                            <form action="{{ url('task/'.$task->id.'/edit')}}" method="POST" class="form-horizontal">
                                                {{ csrf_field() }}

                                                <div class="form-group">
                                                    <label for="task-name" class="col-sm-3 control-label">Edit This Task</label>

                                                    <div class="col-sm-6">
                                                        <input type="text" name="name" id="task-name" class="form-control" value="{{ $task->name }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-6">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fa fa-btn fa-plus"></i>Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>

                                      </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> --}}
            @endif
        </div>
    </div>
@endsection