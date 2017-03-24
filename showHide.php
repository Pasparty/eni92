.press {
background: red;
float: left;
padding: 20px;
margin-left: 20px;
}
.visibleClass {
display: block !important;
}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<div id="x_1" class="press" onclick="showDiv('1')">1</div>
<div id="x_2" class="press" onclick="showDiv('2')">2</div>
<div id="x_3" class="press" onclick="showDiv('3')">3</div>
<div id="x_4" class="press" onclick="showDiv('4')">4</div>
<div id="x_5" class="press" onclick="showDiv('5')">5</div>
<div id="x_6" class="press" onclick="showDiv('6')">6</div>
<br>
<br>
<br>
<br>
<div id="ele-1" style="display: none;">show data 1</div>
<div id="ele-2" style="display: none;">show data 2</div>
<div id="ele-3" style="display: none;">show data 3</div>
<div id="ele-4" style="display: none;">show data 4</div>
<div id="ele-5" style="display: none;">show data 5</div>
<div id="ele-6" style="display: none;">show data 6</div>
<script>
  function showDiv(data) {
    $("#ele-" + data).addClass('visibleClass');
    hideElement(6, data);
  }
  function hideElement(total, active) {
    for (i = 1; i <= total; i++) {
      if (i != active)
        $("#ele-" + i).removeClass('visibleClass');
    }
  }
</script>