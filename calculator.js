//javascript koji na klik salje ajax request sa ID-om polja na kojem je bio klik

<script>
show_result();
function show_result() {
var table = document.getElementById('display-table');
var cells = table.getElementsByTagName("td"); 
for (var i = 0; i < cells.length; i++) { 
   cells[i].onclick = function(){
   xhttp.open("GET", "calculator.php?cell=$i", true);
   xhttp.send();
   };
   }
}
</script>
