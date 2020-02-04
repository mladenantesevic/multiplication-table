<script>
show_result();
function show_result() {
var table = document.getElementById('display-table');
var cells = table.getElementsByTagName("td"); 
for (var i = 0; i < cells.length; i++) { 
   cells[i].onclick = function(){tes();};
    }
}
</script>
