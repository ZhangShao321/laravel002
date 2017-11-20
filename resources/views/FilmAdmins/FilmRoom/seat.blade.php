@extends('FilmAdmins.layout.index')

@section('title', '电影院添加座位图')

<style>
    #seat-maps .seatCharts-cell{
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        font-size: 18px;
    }

     #seat-maps .none{
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        font-size: 18px;
        background: white;
    }
</style>
@section('content') 

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>添加座位图</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form">
            <div class="mws-form-block">

            <div class="mws-form-row">
                <label class="mws-form-label">座位图</label>

                <div class="mws-form-item">
                    行: <input type="text" id="x"  name="hang">
                    列: <input type="text" id="y"  name="lie">
                    <button onclick="registSeat()" id="butss" class="btn btn-danger">确认</button>
                </div>
            </div>
                 
            <div class="mws-form-row">
                <label class="mws-form-label">座位图 (点击去掉多余座位)</label>
                <div class="mws-form-item"> 
                    <div id="seat-maps"></div>
                    <ul id="selected-seats">
                    </ul>
                </div>
            </div> 
            <br>
            </div>
            <div class="mws-button-row">
                {{ csrf_field() }}
                <input type="submit" id="save"  value="完成" class="btn btn-danger">
                
            </div>
            <!-- <div id="legend"></div> -->
        </form>
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

    $('input[type=submit]').click(function(){

        // console.log($('.available'));
        var str = [];

        $('.available').each(function(){

            var zuo = $(this).attr('id');

            str.push(zuo);
        });
        // console.log(str);

        str = str.join('#');
        var hang = $('#x').val();
        var lie = $('#y').val();

        $.post('{{ url("/FilmAdmins/room/seat") }}', {_token:'{{ csrf_token() }}', seat:str, hang:hang, lie:lie, rid:'{{ $id }}'}, function(data){

            console.log(data.url);
            location.href = data.url;
            
        },'json');

        return false;
    });

}    

$('#butss').click(function(){
    return false;
})



</script>


@endsection