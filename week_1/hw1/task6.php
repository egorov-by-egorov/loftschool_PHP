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
                <?php for ($headCount=0; $headCount < 11; $headCount++): ?>
                	<th style="background-color:#ccc"><?php echo $headCount; ?></th>
                <?php endfor; ?>
			</tr>
			</thead>
			<tbody>
	            <?php for ($row=1; $row < 11; $row++): ?>
			        <tr>
				        <td style="background-color:#ccc"><?php echo $row; ?></td>
			            <?php for ($col=1; $col < 11; $col++): ?>
							<td>
								<?php
									if ($row % 2 === 0 && $col % 2 === 0) {
                                        echo '(' . $row * $col . ')';
									} elseif ($row % 2 === 1 && $col % 2 === 1) {
                                        echo '[' . $row * $col . ']';
									}else {
                                        echo $row * $col;
									}
								?>
							</td>
			            <?php endfor; ?>
			        </tr>
	            <?php endfor; ?>
			</tbody>
	</table>
	</body>
</html>