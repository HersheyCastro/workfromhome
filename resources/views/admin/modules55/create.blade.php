@extends('admin.layouts.master')
@section('title', 'Modules')
@section('content')



    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary ">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-plus-circle fa-fw"></i>Add New Modules</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(array('route' => 'admin'.'.modules55.store', 'id' => 'form-with-validation')) !!}
                    <div class="form-group {{ $errors->has('sModuleName') ? 'is-invalid' : '' }}">
                        {!! Form::label('sModuleName', 'Module Name', array('class'=>'control-label')) !!}
                        <span style="font-weight: 700; color: red">*</span>
                        {!! Form::text('sModuleName', old('sModuleName'), array('class'=>'form-control','disabled'=> isset($view) ? true : false))  !!}
                        @if ($errors->has('sModuleName'))
                            <span class="invalid-feedback">
            <strong>{{ $errors->first('sModuleName') }}</strong>
            </span>
                        @endif

                    </div>
                    <div class="form-group {{ $errors->has('sModuleCode') ? 'is-invalid' : '' }}">
                        {!! Form::label('sModuleCode', 'Code', array('class'=>'control-label')) !!}
                        <span style="font-weight: 700; color: red">*</span>
                        {!! Form::text('sModuleCode', old('sModuleCode'), array('class'=>'form-control','disabled'=> isset($view) ? true : false))  !!}
                        @if ($errors->has('sModuleCode'))
                            <span class="invalid-feedback">
            <strong>{{ $errors->first('sModuleCode') }}</strong>
            </span>
                        @endif

                    </div>
                    <div class="form-group {{ $errors->has('sTable') ? 'is-invalid' : '' }}">
                        {!! Form::label('sTable', 'Table', array('class'=>'control-label')) !!}
                        <span style="font-weight: 700; color: red">*</span>
                        {!! Form::text('sTable', old('sTable'), array('class'=>'form-control','disabled'=> isset($view) ? true : false))  !!}
                        @if ($errors->has('sTable'))
                            <span class="invalid-feedback">
            <strong>{{ $errors->first('sTable') }}</strong>
            </span>
                        @endif

                    </div>
                    <div class="form-group {{ $errors->has('permissions55_id') ? 'is-invalid' : '' }}">
                        {!! Form::label('permissions55_id[]', 'Access', array('class'=>'control-label')) !!}
                        <span style="font-weight: 700; color: red">*</span>
                        {!! Form::select('permissions55_id[]', $permissions55, old('permissions55_id[]'), array('class'=>'form-control select2', 'width'=>'100', 'multiple'=>'multiple' ,'disabled'=> isset($view) ? true : false)) !!}
                        @if ($errors->has('permissions55_id'))
                            <span class="invalid-feedback">
                         <strong>{{ $errors->first('permissions55_id') }}</strong>
                         </span>
                        @endif

                    </div>
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::submit( 'Create' , array('class' => 'btn btn-primary')) !!}
                            {!! link_to_route('admin'.'.modules55.index', 'Cancel', null, array('class' => 'btn btn-default')) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('adminlte/plugins/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript">
        tinymce.init({
            mode: "textareas",
            editor_selector: "mceEditor",
            editor_deselector: "mceNoEditor"
        });
    </script>
    <script>
        @if ($errors->count() > 0)
        toastr.warning("Oops!", "Invalid or incomplete data-entry", {
            closeButton: true,
            positionClass: 'toast-bottom-right'
        });
        @endif
    </script>
@endsection