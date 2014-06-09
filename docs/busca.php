<?php

//convert obj -> array
function objectToArray($d) 
{
	if (is_object($d)) 
	{
		// Gets the properties of the given object
		// with get_object_vars function
		$d = get_object_vars($d);
	}

	if (is_array($d)) 
	{
		/*
		 * Return array converted to object
		 * Using __FUNCTION__ (Magic constant)
		 * for recursive call
		 */
		return array_map(__FUNCTION__, $d);
	}
	else
	{
		// Return array
		return $d;
	}
}

/*** Book Search
*********************/
$search = file_get_contents('http://it-ebooks-api.info/v1/book/3426521078');
$response = objectToArray(json_decode($search));
echo "<pre>" . print_r($response, 1);

// $totalLivros = (int)$response['Total'];
// $totalPaginas = ($totalLivros % 10 == 0) ? intval($totalLivros / 10) : intval($totalLivros / 10) + 1;

// echo "<meta charset='utf-8'>";
// echo "Total de livros: " . $totalLivros . "<br />";
// echo "Número de páginas: " . $totalPaginas;
// echo "<br />" . count($response['Books']);
