SELECT 
		it.plu,
		mar.nombre as marca,
		li.nombre as linea,
		col.nombre as nombre,
		modl.nombre as modelo,
		cil.nombre as cilindraje
FROM
		Item			as it,
		aux_linea		as li,
		aux_marca		as mar,
		aux_color		as col,
		aux_modelo		as modl,
		aux_cilindraje	ascilindraje
WHERE
		it.lineaid=li.id
		AND li.cancel=0
		AND it.marcaid=mar.id
		AND mar.cancel=0
		AND it.colorid=col.id
		AND mar.cancel=0
		AND it.modeloid=modl.id
		AND modl.cancel=0
		AND it.cilindrajeid=cil.id
		AND cil.cancel=0