<?php
$page_id='debug';
?>
<div data-role="page" id="<?php echo $page_id; ?>">
<div data-role="header">
<a href="#mainmenu" data-ajax="false" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back</a>
<h1>Debug</h1>
</div>

<div role="main" class="ui-content">

<div>
<div data-role="collapsible" data-collapsed="true">
<h3>Help</h3>
<pre>
<?php
@include "debug_help.txt";
?>
</pre>
</div>
<div style="float: left;width: 48%;height: 400px;">
<textarea name="textarea" id="cmd" data-role="none" style="margin-top: 13px; width: 100%;height: 300px; font-family:Consolas,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New, monospace; overflow: scroll;"></textarea>
<button id="sendCmd">Send</button>
<div id="status">
</div>
</div>
<div style="float: left;width: 48%;margin-left:20px;height:450px;">
<pre id="debugView" style="width: 100%;height:300px;overflow: scroll; border-style:solid; border-width: 1px;">
</pre>
<button id="toggleDebug">Pause</button>
Filter: <input data-role="none" style="width: 200px" type="text" name="filter" id="filter" value=""/>
<button data-role="none" id="btnfilter">Apply</button>
<button data-role="none" id="btnfilterclear">Clear</button>
</div>
</div>

<script>
var BUF_SIZE = 20;
var buf_lines = 0;
var pause = 0;
var pause_x = 0;
var filter = [];
var connected = 0;

function isInt(value) {

    var er = /^-?[0-9]+$/;

    return er.test(value);
}

var statusDiv = $("div#status");
function clearStatus() {
	statusDiv.text("");
}

$( "#btnfilterclear" ).click(function(){
	$("input#filter").val("");
	filter = [];
	return false;
});

$( "#btnfilter" ).click(function(){
	var c = $("input#filter").val();
	filter = c.trim().replace(/\s+/g, ' ').split(' ');
	if (filter[0] == "") filter = [];
	return false;
});

$( "#sendCmd" ).click(function(){
		var d = [];
		var c = $("textarea#cmd").val();
		var err = 0;
		c = c.split("\n");
		//validate
		for (var i=0;i<c.length;i++) {
			var tmp = c[i].trim().replace(/\s+/g, ' ')
			if (tmp=='') continue;
			tmp = tmp.split(' ');
			if ((typeof tmp[0] == 'undefined') || (typeof tmp[1] == 'undefined')) {
				statusDiv.text("Error parsing line: "+i);
				setTimeout(clearStatus,3000);
				return false;
			} else if (isInt(tmp[0]) &&  isInt(tmp[1])) {
				d.push({"t": tmp[0], "v": tmp[1]});
			} else {
				statusDiv.text("Error parsing int on line: "+i);
				setTimeout(clearStatus,3000);
				return false;
			}
		}

		//populate debug
		for (var i=0;i<d.length;i++) {
			addToDebug(1,d[i].t,d[i].v);
		}
		$.ajax({
			url: "avrspi_cmd.php",
			type: "POST",
			dataType: "json",
			data: {"data": JSON.stringify(d)},
			success : function(data){
				if (data.success == "true") {
					statusDiv.text("Success!");
				} else {
					statusDiv.text("Failed! "+data.error);
				}
				setTimeout(clearStatus,3000);
		       } 
		});
		$("textarea#cmd").val("");
		return false;
});

$( "#toggleDebug" ).click(function(){
		if (pause_x) return false;
		pause_x = 1;

		if (pause) {
			pause = 0;
		}
		else { //currently running
			pause = 1;
		}

		if (pause == 0)
			setTimeout(refreshDebugView,1000);

		return false;
	});

var pre = $("pre#debugView");

function addLineToDebug(l) {
	if (buf_lines==BUF_SIZE) {
		var str = pre.text();
		pre.text(str.substring(str.indexOf("\n") + 1));
	} else {
		buf_lines++;
	}
	pre.append(l+"\n");
	pre.scrollTop( pre.prop("scrollHeight") );
}

function addToDebug(s, t ,v) {
	t=""+t;
	if (s == 0)
		if (filter.length>0)
			if ($.inArray(t,filter)==-1) return;
	if (s==0) 
		addLineToDebug(">> "+t+" "+v);
	else 
		addLineToDebug(""+t+" "+v);
}

function refreshDebugView() {
	$.getJSON( "avrspi_reader.php", function( data ) {
		var d = data.data;
		if (typeof data.error != 'undefined') {
			if (connected == 1) {
				addLineToDebug('Disconnected.');
				connected = 0;
			}
			addLineToDebug(data.error+"\n");
		}	
		if (typeof d != 'undefined') { 
			if (connected == 0) { 
				addLineToDebug('Connected.');
				connected = 1;
			}
			for (var i=0;i<d.length;i++) {
				addToDebug(0,d[i].t,d[i].v);
			}
		}
	});

	if (pause_x) {
		if (pause) $("button#toggleDebug").html("Resume");	
		else $("button#toggleDebug").html("Pause");	
		pause_x = 0;
	}

	if (pause == 0) setTimeout(refreshDebugView,1000);
}

setTimeout(refreshDebugView,1000);

</script>


