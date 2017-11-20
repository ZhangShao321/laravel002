@extends('admin.layout.admins')
        
@section('title','用户列表')


@section('content')

<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    <div class="dataTables_length" id="DataTables_Table_1_length">
        <label>
            显示
            <select aria-controls="DataTables_Table_1" size="1" name="DataTables_Table_1_length">
                <option selected="selected" value="10">
                    10
                </option>
                <option value="25">
                    25
                </option>
                <option value="50">
                    50
                </option>
                <option value="100">
                    100
                </option>
            </select>
            entries
        </label>
    </div>
    <div id="DataTables_Table_1_filter" class="dataTables_filter">
        <label>
            Search:
            <input aria-controls="DataTables_Table_1" type="text">
        </label>
    </div>
    <table aria-describedby="DataTables_Table_1_info" id="DataTables_Table_1"
    class="mws-datatable-fn mws-table dataTable">
        <thead>
            <tr role="row">
                <th aria-label="Rendering engine: activate to sort column descending"
                aria-sort="ascending" style="width: 156px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_1"
                tabindex="0" role="columnheader" class="sorting_asc">
                    ID
                </th>
                <th aria-label="Browser: activate to sort column ascending" style="width: 212px;"
                colspan="1" rowspan="1" aria-controls="DataTables_Table_1" tabindex="0"
                role="columnheader" class="sorting">
                    phone
                </th>
                <th aria-label="Platform(s): activate to sort column ascending" style="width: 197px;"
                colspan="1" rowspan="1" aria-controls="DataTables_Table_1" tabindex="0"
                role="columnheader" class="sorting">
                    状态
                </th>
                <th aria-label="CSS grade: activate to sort column ascending" style="width: 97px;"
                colspan="1" rowspan="1" aria-controls="DataTables_Table_1" tabindex="0"
                role="columnheader" class="sorting">
                    时间
                </th>
                <th aria-label="CSS grade: activate to sort column ascending" style="width: 97px;"
                colspan="1" rowspan="1" aria-controls="DataTables_Table_1" tabindex="0"
                role="columnheader" class="sorting">
                    操作
                </th>
            </tr>
        </thead>
        <tbody aria-relevant="all" aria-live="polite" role="alert">

        @foreach($res as $k => $v)
            <tr class="odd" align="center">
                <td class="  sorting_1">
                    {{$v->id}}
                </td>
                <td class=" ">
                    {{$v->phone}}
                </td>
                <td class=" ">
                    <button class='btn btn-info'>{{$v->status ? '开启' : '关闭'}}</button>         
                </td>
                <td class=" ">
                    {{date('Y-m-d H:i:s',$v->lastlogin)}}
                </td>
                <td class=" ">
                    <a href="{{url('admin/user/'.$v->id.'/edit')}}" class='btn btn-danger'>修改</a>

                   <form action="/admin/user/{{$v->id}}" method='post' style='display:inline'>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class='btn btn-warning'>删除</button>
                   </form>
                    
                </td>
            </tr>

        @endforeach 
        </tbody>
    </table>
    <div id="DataTables_Table_1_info" class="dataTables_info">
        Showing 1 to 10 of 57 entries
    </div>
    <div id="DataTables_Table_1_paginate" class="dataTables_paginate paging_full_numbers">
        <a id="DataTables_Table_1_first" tabindex="0" class="first paginate_button paginate_button_disabled">
            First
        </a>
        <a id="DataTables_Table_1_previous" tabindex="0" class="previous paginate_button paginate_button_disabled">
            Previous
        </a>
        <span>
            <a tabindex="0" class="paginate_active">
                1
            </a>
            <a tabindex="0" class="paginate_button">
                2
            </a>
            <a tabindex="0" class="paginate_button">
                3
            </a>
            <a tabindex="0" class="paginate_button">
                4
            </a>
            <a tabindex="0" class="paginate_button">
                5
            </a>
        </span>
        <a id="DataTables_Table_1_next" tabindex="0" class="next paginate_button">
            Next
        </a>
        <a id="DataTables_Table_1_last" tabindex="0" class="last paginate_button">
            Last
        </a>
    </div>
</div>


@endsection