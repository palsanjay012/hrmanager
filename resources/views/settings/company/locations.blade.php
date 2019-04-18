@extends('layouts.registered_user') @section('content')
<!-- BEGIN CONTENT -->
<div class="row companysettings">
<div class="col-md-2 sidebar-content "> 
    @include('elements.registered_user.sidebar_settings')
    </div>

    <div class="col-md-10 col-sm-10 col-xs-10">
        
        <div class="page-bar">
            <div class="portlet-title tabbable-line mt10">

            @include('elements.registered_user.subelements.company_menu')

            </div>
           
        </div>
        
    </div>
</div>

@endsection
