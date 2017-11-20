@extends('FilmAdmins.layout.index')

@section('title', '电影院座位图')

<style>
    #seat-maps .seatCharts-cell{
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        font-size: 18px;
        background: white;
    }

     #seat-maps .cur{
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        font-size: 18px;
        background: blue;
    }
    #xiugai{
        height: 50px;
        padding-left: 20px;
        background: lightblue;
        padding-top: 18px;
    }
</style>
@section('content') 

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>座位图</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form">
            <div class="mws-form-block">

                 
            <div class="mws-form-row">
                <label class="mws-form-label"><h3>座位图</h3></label>
                <input type="hidden" id="x" value="{{ $res->hang }}"  name="hang">
                <input type="hidden" id="y"  value="{{ $res->lie }}" name="lie">
                 <br/>  
                <div class="mws-form-item"> 
                    <div id="seat-maps"></div>
                    <ul id="selected-seats">
                    </ul>
                </div>
            </div> 
            <br>
            </div></form>
            <div class="mws-button-row" id="xiugai"  >
                <a href="/FilmAdmins/room/seatedit/{{ $res->id }}"><button  class="btn btn-danger">修改</button></a>
                
            </div>
            <!-- <div id="legend"></div> -->
        
    </div>
</div>




@endsection
@section('js')      
<script>

var firstSeatLabel = 1;

$(document).ready(function() {
    registSeat();

    /*$("#save").on("click",function(){
        $.get("save?str="+map).success(function(data){
            console.log(data);
        });
    });*/
});

var map = new Array();

function registSeat(){

    var x = parseInt($("#x").val());
    var y = parseInt($("#y").val());
    map = [];
    for(var i=0;i<x;i++){
        map[i]="";
        for(var j=0;j<y;j++){
            map[i]+="e";
        }
    }
    $('#seat-maps').empty();
    $("#legend").empty();
    firstSeatLabel = 1;
    var sc = $('#seat-maps').seatCharts({
        map: map,
        naming: {
            top: false, //不显示顶部横坐标（行） 
            left:false,
            getLabel: function(character, row, column) { //返回座位信息 
                return firstSeatLabel++;
            }
        },
        legend: {
            node: $('#legend'),
            items: [
                [ 'e', 'available',   '位置' ],
                [ 'e', 'none', '过道']
            ]
        },
        click: function() {
             if (this.status() == 'available') { //若为可选座状态，添加座位
                map[this.settings.row]=map[this.settings.row].substring(0,this.settings.column)+"_"+map[this.settings.row].substring(this.settings.column+1);
                return 'none';
             }else {
                map[this.settings.row]=map[this.settings.row].substring(0,this.settings.column)+"e"+map[this.settings.row].substring(this.settings.column+1);
                return "available";
            }  
        }
    });

        // sc.get(['1_2', '4_1', '7_1', '7_2']).status('none');

    @foreach($seat as $k=>$v)

        $("#{{ $v }}").addClass('cur');

    @endforeach

}    

$('#butss').click(function(){
    return false;
})



</script>


@endsection
