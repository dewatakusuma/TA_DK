@extends('backend.layouts.master')

@section('title')
   Home
@endsection

@section('content')
<section class="content">
<!-- Jquery Core Js -->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/js/plugin/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('/js/plotly-latest.min.js') }}"></script>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Monitoring</h2>
        </div>
        <div class="demo-google-material-icon"><div class="alert alert-success"><i class="material-icons">info</i> <span class="icon-name">Detak Jantung : Normal</span></div></div>
        <div class="card">
		<div class="widget-body">
				<div style="background-color: #fdfdfd"><div id="graph" style="width: 100%; height: 500px;"></div></div>
		</div>
		</div>
    </div>
<style type="text/css">
	#graph{
  border: 1px solid rgb(204, 204, 204);
  border-radius: 5px;
  cursor: pointer;
  width: 400px;
  height: 200px;
}
</style>

<script>
var ECG_data = []
var testing;
var i = 0;

var time = new Date();

var data = [{
    x: [time],
    y: [0],
    mode: 'lines',

    line: {
        color: '#80CAF6'
    }
}]
var isi = 0;
//console.log(data)
Plotly.plot('graph', data);



setInterval(function() {
    var time = new Date();
    // console.log(ECG_data);
    isi = 0;
    var update = {
        x: [
            [time]
        ],
        y: [
            [1]
        ]
    }
    var olderTime = time.setSeconds(time.getSeconds() - 7);
    var futureTime = time.setSeconds(time.getSeconds() + 7);

    var minuteView = {
        xaxis: {
            type: 'date',
            range: [olderTime, futureTime]
        }
    };
    // console.log(data);
    // Console.log("1");
    // Plotly.relayout('graph', minuteView);
    Plotly.extendTraces('graph', update, [0]);
    var plotDiv = document.getElementById('graph');
    var plotData = plotDiv.data;
    console.log(plotData[0]);
    if (plotData[0]['x'].length > 1000) {
        plotData[0]['x'].shift();
        plotData[0]['y'].shift();
    }

    var cnt = 0;
    window.onresize = function() {
        Plotly.Plots.resize(graph);
    };
    i++;
}, 0);
</script>
</section>
@endsection
