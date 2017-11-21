@extends('FilmAdmins.layout.index')

@section('title', '放映列表')


@section('content')
   

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            Data Table with Numbered Pagination
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <div id="DataTables_Table_1_length" class="dataTables_length">
                <label>
                    Show
                    <select size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1">
                        <option value="10" selected="selected">
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
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>
                    Search:
                    <input type="text" aria-controls="DataTables_Table_1">
                </label>
            </div>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 76px;">
                        ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 107px;">
                        电影名称
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                        style="width: 96px;">
                            影厅
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                        style="width: 64px;">
                            影院
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 42px;">
                            开始时间
                        </th>

                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 42px;">
                            结束时间
                        </th>

                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 42px;">
                            状态
                        </th>

                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 42px;">
                            操作
                        </th>

                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                     @foreach($roo as $k => $v)
                
                   <tr class="odd">
                    
                        <td class="  sorting_1">
                            {{$v->id}}
                        </td>
                   
                        <td class=" ">
                            {{$v->filmname}}
                        </td>
                     
                        <td class=" ">
                          {{$v->roomname}}
                           
                        </td>
                        <td class=" ">
                             {{$v->cinema}}
                            
                        </td>
                        <td class=" ">
                            {{date('Y-m-d H:i:s',$v->time)}}
                            <!-- date('YYYY-mm-dd hh:mm:ss') -->
                            
                        </td>
                         <td class=" ">
                           结束时间
                            
                            
                        </td>
                         <td class=" ">
                             {{ $arr[$v->status]}}
                            
                        </td>
                         <td class=" ">
                           <a href="{{asset('/FilmAdmins/showEdit?id=').$v->id}}">编辑</a>
                          <span style="cursor:pointer; color:#C5D52B" class="del"  value="{{$v->id}}"  >删除</span>
                            
                        </td>
                    </tr>
                     @endforeach 

                   
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
                Showing 1 to 10 of 57 entries
            </div>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
            </div>
        </div>
    </div>
</div>









@endsection


@section('js');

<script type="text/javascript">

    //删除
    $("span").click(function(){
        //获取id
         var id = $(this).attr('value');
        
         layer.alert('你确定要删除此信息', {
            skin: 'layui-layer-molv' //样式类名  自定义样式
            ,closeBtn: 1    // 是否显示关闭按钮
            ,anim: 1 //动画类型
            ,btn: ['确定','取消'] //按钮
            ,icon: 5    // icon  6 笑脸  4,锁  5 哭 3,?  2,X  1,√ 0,!
            ,shadeClose: false
            ,yes:function(){
                // layer.msg('执行中');
                layer.msg('执行中', {
                              icon: 16
                              ,shade: 0.01
                            });

                console.log(id);
                $.ajax({
                            type: "GET",
                            url: "{{url('/FilmAdmins/showDelete')}}",
                            data: 'id='+id,
                            success: function(msg){
                              alert(msg);
                              // console.log(msg);
                               location.reload();  
                            }
                         });




            }
            ,btn2:function(){
                // layer.msg('按钮2');取消执行的按钮
            }});
    });






    
       

    
</script>


@endsection;
