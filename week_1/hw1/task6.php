<?php
//  Используя цикл for, выведите таблицу умножения размером 10x10. Таблица должна быть выведена с помощью HTML тега <table>.
//  Если значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
//  Если значение индекса строки и столбца Нечётный, то результат вывести в квадратных скобках.
//  Во всех остальных случаях результат выводить просто числом.
?>
<!doctype html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Таблица умножения</title>
		<style>
			h1 {text-align: center;}
			table {margin: 50px auto 0 auto;}
			th,td {padding: 5px;text-align: center;}
		</style>
	</head>
	<body>
	<h1>Таблица умножения размером 10x10</h1>
		<table border="1"cellspacing="0">
			<thead>
			<tr>
                <?php for ($i=0; $i < 11; $i++): ?>
                	<th style="background-color:#ccc"><?php echo $i; ?></th>
                <?php endfor; ?>
			</tr>
			</thead>
			<tbody>
	            <?php for ($y=1; $y < 11; $y++): ?>
			        <tr>
				        <td style="background-color:#ccc"><?php echo $y; ?></td>
			            <?php for ($j=1; $j < 11; $j++): ?>
							<td>
								<?php if ($y % 2):
									if ($j % 2): echo '[' . $y * $j . ']';
										else: echo $y * $j;
										endif;
									elseif ($j % 2): echo $y * $j;
									else: echo '(' . $y * $j . ')';
								endif;?>
							</td>
			            <?php endfor; ?>
			        </tr>
	            <?php endfor; ?>
			</tbody>
	</table>
	</body>
</html>