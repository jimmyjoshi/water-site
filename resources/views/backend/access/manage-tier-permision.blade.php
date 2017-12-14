@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.access.users.management') . ' | ' . trans('labels.backend.access.users.view'))

@section('page-header')
    <h1>
        Manage Tier Permission
        <small>Manage</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.users.view') }}</h3>

            <div class="box-tools pull-right">
                
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">

            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Tier 1</a>
                    </li>

                    <li role="presentation">
                        <a href="#history" aria-controls="history" role="tab" data-toggle="tab">Tier 2</a>
                    </li>
                </ul>

                <div class="tab-content">
                @php
                    $categories = $repository->getAll();
                    $firstTier  = $repository->getFirstLevelCategories()->pluck('category_id')->toArray();
                    $secondTier  = $repository->getSecondLevelCategories()->pluck('category_id')->toArray();
                    /*dd($firstTier);*/
                @endphp
                    <div role="tabpanel" class="tab-pane mt-30 active" id="overview">
                        <div class="row">
                           @foreach($categories as $category)
                                <div class="col-md-3">
                                    <label>
                                        <input class="leavel-one-permission" type="checkbox" {{ in_array($category->id, $firstTier) ? 'checked="checked"' : '' }}  name="leavel_one" value="{{ $category->id }}">{{ $category->title }}
                                    </label>
                                </div>
                           @endforeach
                           <div class="col-md-12 text-center">
                                <a href="javascript:void(0);" id="tierOneUpdate" class="btn btn-success lg">Update Tier Permission</a>
                           </div>
                        </div>
                    </div><!--tab overview profile-->

                    <div role="tabpanel" class="tab-pane mt-30" id="history">
                        <div class="row">
                           @foreach($categories as $category)
                                <div class="col-md-3">
                                <label>
                                    <input class="leavel-two-permission" type="checkbox" {{ in_array($category->id, $secondTier) ? 'checked="checked"' : '' }}  name="leavel_one" value="{{ $category->id }}">{{ $category->title }}
                                </label>
                                </div>
                           @endforeach
                            <div class="col-md-12 text-center">
                                <a href="javascript:void(0);" id="tierTwoUpdate" class="btn btn-success lg">Update Tier Permission</a>
                           </div>
                           
                        </div>
                    </div><!--tab panel history-->

                </div><!--tab content-->

            </div><!--tab panel-->

        </div><!-- /.box-body -->
    </div><!--box-->
@stop

@section('after-scripts')
    <script>

    var url = '{!! route('admin.access.update-permission-tier') !!}';

    jQuery("#tierOneUpdate").on('click', function()
    {
        var checkedVals = jQuery('.leavel-one-permission:checkbox:checked').map(function() 
        {
            return this.value;
        }).get();
        

        var tierOnePermissions = checkedVals.join(",");

        jQuery.ajax(
        {
            url: url,
            method: "POST",
            dataType: "JSON",
            data: {
                values:     tierOnePermissions,
                tierLevel:  1
            },
            success: function(data)
            {
                if(data.status == true)
                {
                    alert("Permission Updated Succesfuly !");
                    return true;
                }
                
                alert("Somethin Went Wrong !");
            },
            error: function(data)
            {
                alert("Somethin Went Wrong !");
            }   
        })
    });

     jQuery("#tierTwoUpdate").on('click', function()
    {
        var checkedVals = jQuery('.leavel-two-permission:checkbox:checked').map(function() 
        {
            return this.value;
        }).get();
        

        var tierOnePermissions = checkedVals.join(",");

        jQuery.ajax(
        {
            url: url,
            method: "POST",
            dataType: "JSON",
            data: {
                values:     tierOnePermissions,
                tierLevel:  2
            },
            success: function(data)
            {
                if(data.status == true)
                {
                    alert("Permission Updated Succesfuly !");
                    return true;
                }
                
                alert("Somethin Went Wrong !");
            },
            error: function(data)
            {
                alert("Somethin Went Wrong !");
            }   
        })
    })
    </script>
@endsection