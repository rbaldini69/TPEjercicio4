<?php
	
	
	$marca=$_GET["marca"];
	$cantidad=$_GET["cantidad"];
	$descuento=0;
	$importeFinal=0;
	$precioLampara=35;
	$importeFinalConDesc=0;
	$Apagar=0;
	$iibb=0.10;
	if(isset($_GET["calculoPrecio"]))
	{
		if ($cantidad==3)
			{
		 		switch ($marca) 
		 		{
		 			case 'ArgentinaLuz':
		 			$descuento=0.15;

		 				break;
			 		case 'FelipeLamparas':
			 			$descuento=0.10;
		 				break;
		 			default:
		 				$descuento=0;
		 				break;
		 		}
		 	}
			# code...
		if ($cantidad==4)
		 	{
			switch ($marca) 
				{
				case 'ArgentinaLuz':
					$descuento=0.25;
					break;
				case 'FelipeLamparas':
					$descuento=0.25;
					break;
				
				default:
					$descuento=0.20;
					break;
				}
			}
		if ($cantidad==5)
			{
				switch ($marca) 
				{
					case 'ArgentinaLuz':
						$descuento=0.40;
						break;
					default:
						$descuento=0.30;
						# code...
						break;
				}
			# code...
			}
		if ($cantidad>=6)
			{
				$descuento=0.50;

			# code...
			}

		$importeFinal=($precioLampara*$cantidad);
		$importeFinalConDesc=$importeFinal-($importeFinal*$descuento);
		$impuesto=$importeFinalConDesc*$iibb;
		if ($importeFinalConDesc>=120)
		{
		
		$Apagar=($importeFinalConDesc-$impuesto);
		$mensaje="IIBB Usted pago ".$Apagar." siendo $".$impuesto ." el impuesto que se pagÃ³.";
		}
		else
		{
			$Apagar=$importeFinalConDesc;
			$mensaje="";
		}
	}		

	
		include "index.php";
		
//			Las lÃ¡mparas estÃ¡n  al mismo precio de $35 pesos final.
/*A.	Si compra 6 o mÃ¡s  lamparitas bajo consumo tiene un descuento del 50%. 
B.	Si compra 5  lamparitas bajo consumo marca "ArgentinaLuz" se hace un descuento del 40 % y si es de otra marca el descuento es del 30%.
C.	Si compra 4  lamparitas bajo consumo marca "ArgentinaLuz" o â€œFelipeLamparasâ€ se hace un descuento del 25 % y si es de otra marca el descuento es del 20%.
D.	Si compra 3  lamparitas bajo consumo marca "ArgentinaLuz"  el descuento es del 15%, si es  â€œFelipeLamparasâ€ se hace un descuento del 10 % y si es de otra marca un 5%.
E.	Si el importe final con descuento suma mÃ¡s de $120  se debe sumar un 10% de ingresos brutos en informar del impuesto con el siguiente mensaje:
 â€IIBB Usted pago Xâ€, siendo X el impuesto que se pagÃ³. 
*/
	
?>
