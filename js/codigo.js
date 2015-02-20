$(document).ready(inicio);

	function inicio(){
		$(".btncompra").click(add);
		$("#carrito").load("php/poncarrito.php");
	}

	function add(){
		$("#carrito").load("php/poncarrito.php?p="+$(this).val());
	}