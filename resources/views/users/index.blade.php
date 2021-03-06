@extends('layouts/default')

{{-- Page title --}}
@section('title')

@if (Input::get('status')=='deleted')
    {{ trans('general.deleted') }}
@else
    {{ trans('general.current') }}
@endif
 {{ trans('general.users') }}


@parent
@stop

@section('header_right')
    @can('users.create')
        @if (\App\Models\Setting::getSettings()->ldap_enabled == 1)
          <a href="{{ route('ldap/user') }}" class="btn btn-default pull-right"><span class="fa fa-upload"></span> LDAP</a>
        @endif
          <a href="{{ route('import/user') }}" class="btn btn-default pull-right" style="margin-right: 5px;"><span class="fa fa-upload"></span> {{ trans('general.import') }}</a>
          <a href="{{ route('create/user') }}" class="btn btn-primary pull-right" style="margin-right: 5px;">  {{ trans('general.create') }}</a>
    @endcan

        @if (Input::get('status')=='deleted')
          <a class="btn btn-default pull-right" href="{{ URL::to('admin/users') }}" style="margin-right: 5px;">{{ trans('admin/users/table.show_current') }}</a>
        @else
          <a class="btn btn-default pull-right" href="{{ URL::to('admin/users?status=deleted') }}" style="margin-right: 5px;">{{ trans('admin/users/table.show_deleted') }}</a>
        @endif
<<<<<<< HEAD
=======
    @can('users.view')
        <a class="btn btn-default pull-right" href="{{ URL::to('admin/users/export') }}" style="margin-right: 5px;">Export</a>
    @endcan
>>>>>>> 62f5a1b2c7934f534fc8fc8299831fc32e794a72

@stop

{{-- Page content --}}
@section('content')

<div class="row">
  <div class="col-md-12">

    <div class="box box-default">

        <div class="box-body">

          {{ Form::open([
               'method' => 'POST',
               'route' => ['users/bulkedit'],
               'class' => 'form-inline' ]) }}

            @if (Input::get('status')!='deleted')
                @can('users.delete')
               <div id="toolbar">
                 <select name="bulk_actions" class="form-control select2" style="width: 200px;">
                     <option value="delete">Bulk Checkin &amp; Delete</option>
                 </select>
                 <button class="btn btn-default" id="bulkEdit" disabled>Go</button>
             </div>
                @endcan
            @endif


             <table
              name="users"
              data-toolbar="#toolbar"
              class="table table-striped"
              id="table"
              data-toggle="table"
              data-url="{{ route('api.users.list', array(''=>e(Input::get('status')))) }}"
              data-cookie="true"
              data-click-to-select="true"
              data-cookie-id-table="userTableDisplay-{{ config('version.hash_version') }}">
                 <thead>
                     <tr>
                         <th data-class="hidden-xs hidden-sm" data-switchable="false" data-searchable="false" data-sortable="false" data-field="checkbox">
                             @if (Input::get('status')!='deleted')
                                 <div class="text-center"><input type="checkbox" id="checkAll" style="padding-left: 0px;" style="hidden-xs hidden-sm"></div>
                             @endif
                         </th>
                         <th data-switchable="true" data-sortable="true" data-field="id" data-visible="false">{{ trans('general.id') }}</th>
                         <th data-switchable="true" data-sortable="false" data-field="companyName" data-visible="false">{{ trans('admin/companies/table.title') }}</th>
                         <th data-switchable="true" data-sortable="true" data-field="employee_num" data-visible="false">{{ trans('admin/users/table.employee_num') }}</th>
                         <th data-sortable="true" data-field="name">{{ trans('admin/users/table.name') }}</th>
<<<<<<< HEAD
                         <th data-sortable="true" data-field="email">
                             <span class="hidden-md hidden-lg">Email</span>
=======
                         <th data-switchable="true" data-sortable="true" data-field="jobtitle" data-visible="false">{{ trans('admin/users/table.title') }}</th>
                         <th data-sortable="true" data-field="email">
                             <span class="hidden-md hidden-lg">{{ trans('admin/users/table.email') }}</span>
>>>>>>> 62f5a1b2c7934f534fc8fc8299831fc32e794a72
                             <span class="hidden-xs"><i class="fa fa-envelope fa-lg"></i></span>
                         </th>
                         <th data-sortable="true" data-field="username">{{ trans('admin/users/table.username') }}</th>
                         <th data-searchable="true" data-sortable="true" data-field="manager">{{ trans('admin/users/table.manager') }}</th>
                         <th data-sortable="true" data-field="location">{{ trans('admin/users/table.location') }}</th>
                         <th data-sortable="false" data-field="assets">
                             <span class="hidden-md hidden-lg">Assets</span>
                             <span class="hidden-xs"><i class="fa fa-barcode fa-lg"></i></span>
                         </th>
                         <th data-sortable="false" data-field="licenses">
                             <span class="hidden-md hidden-lg">Licenses</span>
                             <span class="hidden-xs"><i class="fa fa-floppy-o fa-lg"></i></span>
                         </th>
                         <th data-sortable="false" data-field="accessories">
                             <span class="hidden-md hidden-lg">Accessories</span>
                             <span class="hidden-xs"><i class="fa fa-keyboard-o fa-lg"></i></span>
                         </th>
                         <th data-sortable="false" data-field="consumables">
                             <span class="hidden-md hidden-lg">Consumables</span>
                             <span class="hidden-xs"><i class="fa fa-tint fa-lg"></i></span>
                         </th>
                         <th data-sortable="false" data-field="groups">{{ trans('general.groups') }}</th>
                         <th data-sortable="true" data-field="notes">{{ trans('general.notes') }}</th>
                         <th data-sortable="true" data-field="activated">{{ trans('general.activated') }}</th>
                         <th data-sortable="true" data-field="created_at" data-searchable="true" data-visible="false">{{ trans('general.created_at') }}</th>
                         <th data-switchable="false" data-searchable="false" data-sortable="false" data-field="actions" >{{ trans('table.actions') }}</th>
                     </tr>
                 </thead>
                 {{-- <tfoot>
                     <tr>
                         <td colspan="12">
                             <select name="bulk_actions" class="form-control">
                                 <option value="delete">Bulk Delete</option>
                             </select>
                             <button class="btn btn-default" id="bulkEdit" disabled>Go</button>
                         </td>
                     </tr>
                 </tfoot> --}}
             </table>

          {{ Form::close() }}
        </div><!-- /.box-body -->
      </div><!-- /.box -->

  </div>
</div>



@section('moar_scripts')
<script src="{{ asset('assets/js/bootstrap-table.js') }}"></script>
<script src="{{ asset('assets/js/extensions/cookie/bootstrap-table-cookie.js') }}"></script>
<script src="{{ asset('assets/js/extensions/mobile/bootstrap-table-mobile.js') }}"></script>
<script src="{{ asset('assets/js/extensions/export/bootstrap-table-export.js') }}"></script>
<script src="{{ asset('assets/js/extensions/export/tableExport.js') }}"></script>
<script src="{{ asset('assets/js/extensions/export/jquery.base64.js') }}"></script>
<script type="text/javascript">
    $('#table').bootstrapTable({
        classes: 'table table-responsive table-no-bordered',
        undefinedText: '',
        iconsPrefix: 'fa',
        showRefresh: true,
        search: true,
        pageSize: {{ \App\Models\Setting::getSettings()->per_page }},
        pagination: true,
        sidePagination: 'server',
        sortable: true,
        cookie: true,
        cookieExpire: '2y',
        mobileResponsive: true,
        showExport: true,
        showColumns: true,
        exportDataType: 'all',
        exportTypes: ['csv', 'txt','json', 'xml'],
        exportOptions: {
            fileName: 'users-export-' + (new Date()).toISOString().slice(0,10),
        },
        maintainSelected: true,
        paginationFirstText: "{{ trans('general.first') }}",
        paginationLastText: "{{ trans('general.last') }}",
        paginationPreText: "{{ trans('general.previous') }}",
        paginationNextText: "{{ trans('general.next') }}",
        pageList: ['10','25','50','100','150','200'],
        icons: {
            paginationSwitchDown: 'fa-caret-square-o-down',
            paginationSwitchUp: 'fa-caret-square-o-up',
            columns: 'fa-columns',
            refresh: 'fa-refresh'
        },

    });
</script>


<script>

	$(function() {

		function checkForChecked() {

	        var check_checked = $('input.one_required:checked').length;

	        if (check_checked > 0) {
	            $('#bulkEdit').removeAttr('disabled');
	        }
	        else {
	            $('#bulkEdit').attr('disabled', 'disabled');
	        }
	    }

	    $('table').on('change','input.one_required',checkForChecked);

	    $("#checkAll").change(function () {
			$("input:checkbox").prop('checked', $(this).prop("checked"));
			checkForChecked();
		});

	});


</script>
@stop

@stop
